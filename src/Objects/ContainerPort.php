<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerPort extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Number of port to expose on the pod's IP address. This must be a valid
     * port number, 0 < x < 65536.
     */
    public int $containerPort;

    /**
     * What host IP to bind the external port to.
     */
    public ?string $hostIP = null;

    /**
     * Number of port to expose on the host. If specified, this must be a valid
     * port number, 0 < x < 65536. If HostNetwork is specified, this must match
     * ContainerPort. Most containers do not need this.
     */
    public ?int $hostPort = null;

    /**
     * If specified, this must be an IANA_SVC_NAME and unique within the pod.
     * Each named port in a pod must have a unique name. Name for the port that
     * can be referred to by services.
     */
    public ?string $name = null;

    /**
     * Protocol for port. Must be UDP, TCP, or SCTP. Defaults to "TCP".
     */
    public ?string $protocol = null;
}
