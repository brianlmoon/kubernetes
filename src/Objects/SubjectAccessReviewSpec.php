<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class SubjectAccessReviewSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Extra corresponds to the user.Info.GetExtra() method from the
     * authenticator.  Since that is input to the authorizer it needs a
     * reflection here.
     */
    public ?array $extra = null;

    /**
     * Groups is the groups you're testing for.
     */
    public ?StringSet $group = null;

    /**
     * NonResourceAttributes describes information for a non-resource access
     * request
     */
    public ?NonResourceAttributes $nonResourceAttributes = null;

    /**
     * ResourceAuthorizationAttributes describes information for a resource
     * access request
     */
    public ?ResourceAttributes $resourceAttributes = null;

    /**
     * UID information about the requesting user.
     */
    public ?string $uid = null;

    /**
     * User is the user you're testing for. If you specify "User" but not
     * "Group", then is it interpreted as "What if User were not a member of
     * any groups
     */
    public ?string $user = null;

    public function __construct() {
        $this->group = new StringSet();
        $this->nonResourceAttributes = new NonResourceAttributes();
        $this->resourceAttributes = new ResourceAttributes();
    }
}
