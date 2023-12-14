<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ServerStorageVersion extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The ID of the reporting API server.
     */
    public ?string $apiServerID = null;

    /**
     * The API server can decode objects encoded in these versions. The
     * encodingVersion must be included in the decodableVersions.
     */
    public ?StringSet $decodableVersions = null;

    /**
     * The API server encodes the object to this version when persisting it in
     * the backend (e.g., etcd).
     */
    public ?string $encodingVersion = null;

    /**
     * The API server can serve these versions. DecodableVersions must include
     * all ServedVersions.
     */
    public ?StringSet $servedVersions = null;

    public function __construct() {
        $this->decodableVersions = new StringSet();
        $this->servedVersions = new StringSet();
    }
}
