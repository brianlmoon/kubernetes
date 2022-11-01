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
     * The UserName in Windows to run the entrypoint of the container process.
     * Defaults to the user specified in image metadata if unspecified. May
     * also be set in PodSecurityContext. If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes
     * precedence.
     */
    public ?string $runAsUserName = null;
}
