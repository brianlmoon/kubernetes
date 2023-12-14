<?php

namespace Moonspot\Kubernetes\Objects;

class SelfSubjectReviewStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * User attributes of the user making this request.
     */
    public ?UserInfo $userInfo = null;

    public function __construct() {
        $this->userInfo = new UserInfo();
    }
}
