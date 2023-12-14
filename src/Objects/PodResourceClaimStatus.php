<?php

namespace Moonspot\Kubernetes\Objects;

class PodResourceClaimStatus extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name uniquely identifies this resource claim inside the pod. This must
     * match the name of an entry in pod.spec.resourceClaims, which implies
     * that the string must be a DNS_LABEL.
     */
    public string $name;

    /**
     * ResourceClaimName is the name of the ResourceClaim that was generated
     * for the Pod in the namespace of the Pod. It this is unset, then
     * generating a ResourceClaim was not necessary. The
     * pod.spec.resourceClaims entry can be ignored in this case.
     */
    public ?string $resourceClaimName = null;
}
