<?php

namespace Moonspot\Kubernetes\Objects;

class GroupSubject extends \Moonspot\Kubernetes\BaseObject {

    /**
     * name is the user group that matches, or "*" to match all user groups.
     * See
     * https://github.com/kubernetes/apiserver/blob/master/pkg/authentication/user/user.go
     * for some well-known group names. Required.
     */
    public string $name;
}
