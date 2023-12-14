<?php

namespace Moonspot\Kubernetes\Objects;

class TokenRequest extends \Moonspot\Kubernetes\BaseObject {

    /**
     * audience is the intended audience of the token in "TokenRequestSpec". It
     * will default to the audiences of kube apiserver.
     */
    public string $audience;

    /**
     * expirationSeconds is the duration of validity of the token in
     * "TokenRequestSpec". It has the same default value of "ExpirationSeconds"
     * in "TokenRequestSpec".
     */
    public ?int $expirationSeconds = null;
}
