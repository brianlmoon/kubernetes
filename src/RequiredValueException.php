<?php

namespace Moonspot\Kubernetes;

class RequiredValueException extends \RuntimeException {

    protected string $class;
    protected string $property;

    public function __construct(string $class, string $property, string $message = "", int $code = 0, ?Throwable $previous = null) {
        $this->class = $class;
        $this->property = $property;
        if (empty($message)) {
            $message = "$class::$property requires a non-null value";
        }
        parent::__construct($message, $code, $previous);
    }

    public function getClass(): string {
        return $this->class;
    }

    public function getProperty(): string {
        return $this->property;
    }
}
