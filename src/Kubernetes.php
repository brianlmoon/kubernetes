<?php

namespace Moonspot\Kubernetes;

class Kubernetes {

    public static function new(string $class): BaseObject {
        $class = __NAMESPACE__ . "\\Objects\\" . $class;
        if (class_exists($class)) {
            $obj = new $class();
        } else {
            throw new \InvalidArgumentException("Unknown object");
        }
        return $obj;
    }

    public static function factory(string $yaml): BaseObject {
        $arr = yaml_parse($yaml);
        $obj = self::new($arr['kind']);
        $obj->fromArray($arr);
        return $obj;
    }
}
