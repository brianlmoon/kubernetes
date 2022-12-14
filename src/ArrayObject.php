<?php

namespace Moonspot\Kubernetes;

use Moonspot\Kubernetes\Interfaces\Export;

/**
 * ArrayObject which implements the Export interface
 *
 * @author      Brian Moon <brianm@dealnews.com>
 * @copyright   1997-Present DealNews.com, Inc
 * @package     \DealNews\BusinessObjects
 */
class ArrayObject extends \ArrayObject implements Export {
    /**
     * Returns an array representation of the object.
     *
     * @return     array  Array representation of the object.
     */
    public function toArray(): array {
        $output = $this->getArrayCopy();

        foreach ($output as $key => $value) {
            if (is_object($value) && method_exists($value, 'toArray')) {
                $output[$key] = $value->toArray();
            }
        }

        return $output;
    }

    /**
     * Replaces the exisiting data in the object with data in the array
     *
     * @param      array        $data   The data
     *
     * @return     self
     */
    public function fromArray(array $data): object {
        $this->exchangeArray($data);

        return $this;
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
}
