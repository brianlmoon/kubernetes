<?php

namespace Moonspot\Kubernetes\Objects;

class ResourceAttributes extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Group is the API Group of the Resource.  "*" means all.
     */
    public ?string $group = null;

    /**
     * Name is the name of the resource being requested for a "get" or deleted
     * for a "delete". "" (empty) means all.
     */
    public ?string $name = null;

    /**
     * Namespace is the namespace of the action being requested.  Currently,
     * there is no distinction between no namespace and all namespaces ""
     * (empty) is defaulted for LocalSubjectAccessReviews "" (empty) is empty
     * for cluster-scoped resources "" (empty) means "all" for namespace scoped
     * resources from a SubjectAccessReview or SelfSubjectAccessReview
     */
    public ?string $namespace = null;

    /**
     * Resource is one of the existing resource types.  "*" means all.
     */
    public ?string $resource = null;

    /**
     * Subresource is one of the existing resource types.  "" means none.
     */
    public ?string $subresource = null;

    /**
     * Verb is a kubernetes resource API verb, like: get, list, watch, create,
     * update, delete, proxy.  "*" means all.
     */
    public ?string $verb = null;

    /**
     * Version is the API Version of the Resource.  "*" means all.
     */
    public ?string $version = null;
}
