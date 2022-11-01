<?php

namespace Moonspot\Kubernetes\Objects;

class ConfigMapNodeConfigSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * KubeletConfigKey declares which key of the referenced ConfigMap
     * corresponds to the KubeletConfiguration structure This field is required
     * in all cases.
     */
    public string $kubeletConfigKey;

    /**
     * Name is the metadata.name of the referenced ConfigMap. This field is
     * required in all cases.
     */
    public string $name;

    /**
     * Namespace is the metadata.namespace of the referenced ConfigMap. This
     * field is required in all cases.
     */
    public string $namespace;

    /**
     * ResourceVersion is the metadata.ResourceVersion of the referenced
     * ConfigMap. This field is forbidden in Node.Spec, and required in
     * Node.Status.
     */
    public ?string $resourceVersion = null;

    /**
     * UID is the metadata.UID of the referenced ConfigMap. This field is
     * forbidden in Node.Spec, and required in Node.Status.
     */
    public ?string $uid = null;
}
