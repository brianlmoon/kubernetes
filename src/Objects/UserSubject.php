<?php

namespace Moonspot\Kubernetes\Objects;

class UserSubject extends \Moonspot\Kubernetes\BaseObject {

    /**
     * `name` is the username that matches, or "*" to match all usernames.
     * Required.
     */
    public string $name;
}
