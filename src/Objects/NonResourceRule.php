<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class NonResourceRule extends \Moonspot\Kubernetes\BaseObject {

    /**
     * NonResourceURLs is a set of partial urls that a user should have access
     * to.  *s are allowed, but only as the full, final step in the path.  "*"
     * means all.
     */
    public ?StringSet $nonResourceURLs = null;

    /**
     * Verb is a list of kubernetes non-resource API verbs, like: get, post,
     * put, delete, patch, head, options.  "*" means all.
     */
    public StringSet $verbs;

    public function __construct() {
        $this->nonResourceURLs = new StringSet();
        $this->verbs = new StringSet();
    }
}
