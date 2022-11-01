<?php

namespace Moonspot\Kubernetes\Objects;

class WindowsSecurityContextOptions extends \Moonspot\Kubernetes\BaseObject {

    /**
     * GMSACredentialSpec is where the GMSA admission webhook
     * (https://github.com/kubernetes-sigs/windows-gmsa) inlines the contents
     * of the GMSA credential spec named by the GMSACredentialSpecName field.
     */
    public ?string $gmsaCredentialSpec = null;

    /**
     * GMSACredentialSpecName is the name of the GMSA credential spec to use.
     */
    public ?string $gmsaCredentialSpecName = null;

    /**
     * HostProcess determines if a container should be run as a 'Host Process'
     * container. This field is alpha-level and will only be honored by
     * components that enable the WindowsHostProcessContainers feature flag.
     * Setting this field without the feature flag will result in errors when
     * validating the Pod. All of a Pod's containers must have the same
     * effective HostProcess value (it is not allowed to have a mix of
     * HostProcess containers and non-HostProcess containers).  In addition, if
     * HostProcess is true then HostNetwork must also be set to true.
     */
    public ?bool $hostProcess = null;

    /**
     * The UserName in Windows to run the entrypoint of the container process.
     * Defaults to the user specified in image metadata if unspecified. May
     * also be set in PodSecurityContext. If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes
     * precedence.
     */
    public ?string $runAsUserName = null;
}
