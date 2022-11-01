<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class UserInfo extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Any additional information provided by the authenticator.
     */
    public ?array $extra = null;

    /**
     * The names of groups this user is a part of.
     */
    public ?StringSet $groups = null;

    /**
     * A unique value that identifies this user across time. If this user is
     * deleted and another user by the same name is added, they will have
     * different UIDs.
     */
    public ?string $uid = null;

    /**
     * The name that uniquely identifies this user among all active users.
     */
    public ?string $username = null;

    public function __construct() {
        $this->groups = new StringSet();
    }
}
