<?php

namespace Moonspot\Kubernetes\Interfaces;

/**
 * Defines an interface for exporting and importing data
 *
 * @author      Brian Moon <brian@moonspot.net>
 * @package     \Moonspot\Kubernetes
 */
interface Export {
    /**
     * Returns an array representation of the object.
     *
     * @return     array  Array representation of the object.
     */
    public function toArray(): array;

    /**
     * Builds a new object from an array
     *
     * @param      array   $data   The data
     *
     * @return     object
     */
    public function fromArray(array $data): object;

    /**
     * Returns a json representation of the object.
     *
     * @return     string  Json representation of the object.
     */
    public function toJson(): string;

    /**
     * Builds a new object from JSON
     *
     * @param      string  $data   The data
     *
     * @return     object
     */
    public function fromJson(string $data): object;
}
