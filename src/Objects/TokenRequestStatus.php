<?php

namespace Moonspot\Kubernetes\Objects;

class TokenRequestStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * ExpirationTimestamp is the time of expiration of the returned token.
     */
    public Time $expirationTimestamp;

    /**
     * Token is the opaque bearer token.
     */
    public string $token;

    public function __construct() {
        $this->expirationTimestamp = new Time();
    }
}
