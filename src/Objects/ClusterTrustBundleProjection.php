<?php

namespace Moonspot\Kubernetes\Objects;

class ClusterTrustBundleProjection extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Select all ClusterTrustBundles that match this label selector.  Only has
     * effect if signerName is set.  Mutually-exclusive with name.  If unset,
     * interpreted as "match nothing".  If set but empty, interpreted as "match
     * everything".
     */
    public ?LabelSelector $labelSelector = null;

    /**
     * Select a single ClusterTrustBundle by object name.  Mutually-exclusive
     * with signerName and labelSelector.
     */
    public ?string $name = null;

    /**
     * If true, don't block pod startup if the referenced ClusterTrustBundle(s)
     * aren't available.  If using name, then the named ClusterTrustBundle is
     * allowed not to exist.  If using signerName, then the combination of
     * signerName and labelSelector is allowed to match zero
     * ClusterTrustBundles.
     */
    public ?bool $optional = null;

    /**
     * Relative path from the volume root to write the bundle.
     */
    public string $path;

    /**
     * Select all ClusterTrustBundles that match this signer name.
     * Mutually-exclusive with name.  The contents of all selected
     * ClusterTrustBundles will be unified and deduplicated.
     */
    public ?string $signerName = null;

    public function __construct() {
        $this->labelSelector = new LabelSelector();
    }
}
