<?php

namespace Moonspot\Kubernetes\Objects;

class NodeSystemInfo extends \Moonspot\Kubernetes\BaseObject {

    /**
     * The Architecture reported by the node
     */
    public string $architecture;

    /**
     * Boot ID reported by the node.
     */
    public string $bootID;

    /**
     * ContainerRuntime Version reported by the node through runtime remote API
     * (e.g. docker://1.5.0).
     */
    public string $containerRuntimeVersion;

    /**
     * Kernel Version reported by the node from 'uname -r' (e.g.
     * 3.16.0-0.bpo.4-amd64).
     */
    public string $kernelVersion;

    /**
     * KubeProxy Version reported by the node.
     */
    public string $kubeProxyVersion;

    /**
     * Kubelet Version reported by the node.
     */
    public string $kubeletVersion;

    /**
     * MachineID reported by the node. For unique machine identification in the
     * cluster this field is preferred. Learn more from man(5) machine-id:
     * http://man7.org/linux/man-pages/man5/machine-id.5.html
     */
    public string $machineID;

    /**
     * The Operating System reported by the node
     */
    public string $operatingSystem;

    /**
     * OS Image reported by the node from /etc/os-release (e.g. Debian
     * GNU/Linux 7 (wheezy)).
     */
    public string $osImage;

    /**
     * SystemUUID reported by the node. For unique machine identification
     * MachineID is preferred. This field is specific to Red Hat hosts
     * https://access.redhat.com/documentation/en-us/red_hat_subscription_management/1/html/rhsm/uuid
     */
    public string $systemUUID;
}
