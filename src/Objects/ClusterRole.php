<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\PolicyRuleSet;

class ClusterRole extends \Moonspot\Kubernetes\BaseObject {

    public const KIND = 'ClusterRole';

    public const VERSION = 'rbac.k8s.io/v1alpha1';

    /**
     * AggregationRule is an optional field that describes how to build the
     * Rules for this ClusterRole. If AggregationRule is set, then the Rules
     * are controller managed and direct changes to Rules will be stomped by
     * the controller.
     */
    public ?AggregationRule $aggregationRule = null;

    /**
     * APIVersion defines the versioned schema of this representation of an
     * object. Servers should convert recognized schemas to the latest internal
     * value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public ?string $apiVersion = null;

    /**
     * Kind is a string value representing the REST resource this object
     * represents. Servers may infer this from the endpoint the client submits
     * requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public ?string $kind = null;

    /**
     * Standard object's metadata.
     */
    public ?ObjectMeta $metadata = null;

    /**
     * Rules holds all the PolicyRules for this ClusterRole
     */
    public ?PolicyRuleSet $rules = null;

    public function __construct() {
        $this->apiVersion = $this::VERSION;
        $this->kind = $this::KIND;
        $this->aggregationRule = new AggregationRule();
        $this->metadata = new ObjectMeta();
        $this->rules = new PolicyRuleSet();
    }
}
