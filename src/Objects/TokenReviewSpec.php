<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class TokenReviewSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Audiences is a list of the identifiers that the resource server
     * presented with the token identifies as. Audience-aware token
     * authenticators will verify that the token was intended for at least one
     * of the audiences in this list. If no audiences are provided, the
     * audience will default to the audience of the Kubernetes apiserver.
     */
    public ?StringSet $audiences = null;

    /**
     * Token is the opaque bearer token.
     */
    public ?string $token = null;

    public function __construct() {
        $this->audiences = new StringSet();
    }
}
