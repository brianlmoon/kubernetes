<?php

namespace Moonspot\Kubernetes;

use Moonspot\Kubernetes\Interfaces\Export;

abstract class BaseObject implements Export, \JsonSerializable {

    public const REQUIRED = [];

    protected static $to_array_stack = 0;

    /**
     * Returns an array representation of the object.
     *
     * @throws     \LogicException  (description)
     *
     * @return     array            Array representation of the object.
     */
    public function toArray(): array {
        self::$to_array_stack++;
        $data = (array)$this;

        foreach ($data as $key => $value) {
            if (is_object($value)) {
                if ($value instanceof Export) {
                    try {
                        $data[$key] = $value->toArray();
                    } catch (RequiredValueException $e) {
                        $property = $e->getProperty();
                        throw new RequiredValueException(get_class($this), $key . '.' .$property);
                    }
                } else {
                    throw new \LogicException("Propety $key does not implement the Export interface");
                }
            }

            if ($data[$key] === null || (is_array($data[$key]) && empty($data[$key]))) {
                unset($data[$key]);
            }
        }

        if (self::$to_array_stack === 1) {
            // top level objects must have a metadata.name
            if (!isset($data['metadata']['name'])) {
                throw new RequiredValueException(get_class($this), 'metadata.name');
            }
        }

        self::$to_array_stack--;
        return $data;
    }

    /**
     * Replaces the exisiting data in the object with data in the array
     *
     * @param      array        $data   The data
     *
     * @throws     \LogicException  (description)
     *
     * @return     self
     */
    public function fromArray(array $data): object {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                if (isset($this->$key) && is_object($this->$key)) {
                    if ($this->$key instanceof Export) {
                        $obj        = $this->$key;
                        $this->$key = $obj->fromArray($value);
                    } else {
                        throw new \LogicException("Propety $key does not implement the Export interface");
                    }
                } else {
                    $this->$key = $value;
                }
            }
        }

        return $this;
    }

    /**
     * Returns data for json_encode
     *
     * @return     array  Array representation of the object.
     */
    public function jsonSerialize(): array {
        return $this->toArray();
    }

    /**
     * Returns a json representation of the object.
     *
     * @return     string  Json representation of the object.
     */
    public function toJson(): string {
        return json_encode($this->toArray());
    }

    /**
     * Replaces the exisiting data in the object with data from JSON
     *
     * @param      string        $data   The data
     *
     * @return     self
     */
    public function fromJson(string $data): object {
        return $this->fromArray(json_decode($data, true));
    }

    /**
     * Returns a yaml representation of the object.
     *
     * @return     string  Yaml representation of the object.
     */
    public function toYaml(): string {
        return yaml_emit($this->toArray());
    }

    /**
     * Replaces the exisiting data in the object with data from YAML
     *
     * @param      string        $data   The data
     *
     * @return     self
     */
    public function fromYaml(string $data): object {
        return $this->fromArray(yaml_parse($data));
    }
}
