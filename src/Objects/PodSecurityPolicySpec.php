<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\AllowedCSIDriverSet;
use Moonspot\Kubernetes\Objects\Sets\StringSet;
use Moonspot\Kubernetes\Objects\Sets\AllowedFlexVolumeSet;
use Moonspot\Kubernetes\Objects\Sets\AllowedHostPathSet;
use Moonspot\Kubernetes\Objects\Sets\HostPortRangeSet;

class PodSecurityPolicySpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * allowPrivilegeEscalation determines if a pod can request to allow
     * privilege escalation. If unspecified, defaults to true.
     */
    public ?bool $allowPrivilegeEscalation = null;

    /**
     * AllowedCSIDrivers is an allowlist of inline CSI drivers that must be
     * explicitly set to be embedded within a pod spec. An empty value
     * indicates that any CSI driver can be used for inline ephemeral volumes.
     * This is a beta field, and is only honored if the API server enables the
     * CSIInlineVolume feature gate.
     */
    public ?AllowedCSIDriverSet $allowedCSIDrivers = null;

    /**
     * allowedCapabilities is a list of capabilities that can be requested to
     * add to the container. Capabilities in this field may be added at the pod
     * author's discretion. You must not list a capability in both
     * allowedCapabilities and requiredDropCapabilities.
     */
    public ?StringSet $allowedCapabilities = null;

    /**
     * allowedFlexVolumes is an allowlist of Flexvolumes.  Empty or nil
     * indicates that all Flexvolumes may be used.  This parameter is effective
     * only when the usage of the Flexvolumes is allowed in the "volumes"
     * field.
     */
    public ?AllowedFlexVolumeSet $allowedFlexVolumes = null;

    /**
     * allowedHostPaths is an allowlist of host paths. Empty indicates that all
     * host paths may be used.
     */
    public ?AllowedHostPathSet $allowedHostPaths = null;

    /**
     * AllowedProcMountTypes is an allowlist of allowed ProcMountTypes. Empty
     * or nil indicates that only the DefaultProcMountType may be used. This
     * requires the ProcMountType feature flag to be enabled.
     */
    public ?StringSet $allowedProcMountTypes = null;

    /**
     * allowedUnsafeSysctls is a list of explicitly allowed unsafe sysctls,
     * defaults to none. Each entry is either a plain sysctl name or ends in
     * "*" in which case it is considered as a prefix of allowed sysctls.
     * Single * means all unsafe sysctls are allowed. Kubelet has to allowlist
     * all allowed unsafe sysctls explicitly to avoid rejection.
     * 
     * Examples: e.g. "foo/*" allows "foo/bar", "foo/baz", etc. e.g. "foo.*"
     * allows "foo.bar", "foo.baz", etc.
     */
    public ?StringSet $allowedUnsafeSysctls = null;

    /**
     * defaultAddCapabilities is the default set of capabilities that will be
     * added to the container unless the pod spec specifically drops the
     * capability.  You may not list a capability in both
     * defaultAddCapabilities and requiredDropCapabilities. Capabilities added
     * here are implicitly allowed, and need not be included in the
     * allowedCapabilities list.
     */
    public ?StringSet $defaultAddCapabilities = null;

    /**
     * defaultAllowPrivilegeEscalation controls the default setting for whether
     * a process can gain more privileges than its parent process.
     */
    public ?bool $defaultAllowPrivilegeEscalation = null;

    /**
     * forbiddenSysctls is a list of explicitly forbidden sysctls, defaults to
     * none. Each entry is either a plain sysctl name or ends in "*" in which
     * case it is considered as a prefix of forbidden sysctls. Single * means
     * all sysctls are forbidden.
     * 
     * Examples: e.g. "foo/*" forbids "foo/bar", "foo/baz", etc. e.g. "foo.*"
     * forbids "foo.bar", "foo.baz", etc.
     */
    public ?StringSet $forbiddenSysctls = null;

    /**
     * fsGroup is the strategy that will dictate what fs group is used by the
     * SecurityContext.
     */
    public FSGroupStrategyOptions $fsGroup;

    /**
     * hostIPC determines if the policy allows the use of HostIPC in the pod
     * spec.
     */
    public ?bool $hostIPC = null;

    /**
     * hostNetwork determines if the policy allows the use of HostNetwork in
     * the pod spec.
     */
    public ?bool $hostNetwork = null;

    /**
     * hostPID determines if the policy allows the use of HostPID in the pod
     * spec.
     */
    public ?bool $hostPID = null;

    /**
     * hostPorts determines which host port ranges are allowed to be exposed.
     */
    public ?HostPortRangeSet $hostPorts = null;

    /**
     * privileged determines if a pod can request to be run as privileged.
     */
    public ?bool $privileged = null;

    /**
     * readOnlyRootFilesystem when set to true will force containers to run
     * with a read only root file system.  If the container specifically
     * requests to run with a non-read only root file system the PSP should
     * deny the pod. If set to false the container may run with a read only
     * root file system if it wishes but it will not be forced to.
     */
    public ?bool $readOnlyRootFilesystem = null;

    /**
     * requiredDropCapabilities are the capabilities that will be dropped from
     * the container.  These are required to be dropped and cannot be added.
     */
    public ?StringSet $requiredDropCapabilities = null;

    /**
     * RunAsGroup is the strategy that will dictate the allowable RunAsGroup
     * values that may be set. If this field is omitted, the pod's RunAsGroup
     * can take any value. This field requires the RunAsGroup feature gate to
     * be enabled.
     */
    public ?RunAsGroupStrategyOptions $runAsGroup = null;

    /**
     * runAsUser is the strategy that will dictate the allowable RunAsUser
     * values that may be set.
     */
    public RunAsUserStrategyOptions $runAsUser;

    /**
     * runtimeClass is the strategy that will dictate the allowable
     * RuntimeClasses for a pod. If this field is omitted, the pod's
     * runtimeClassName field is unrestricted. Enforcement of this field
     * depends on the RuntimeClass feature gate being enabled.
     */
    public ?RuntimeClassStrategyOptions $runtimeClass = null;

    /**
     * seLinux is the strategy that will dictate the allowable labels that may
     * be set.
     */
    public SELinuxStrategyOptions $seLinux;

    /**
     * supplementalGroups is the strategy that will dictate what supplemental
     * groups are used by the SecurityContext.
     */
    public SupplementalGroupsStrategyOptions $supplementalGroups;

    /**
     * volumes is an allowlist of volume plugins. Empty indicates that no
     * volumes may be used. To allow all volumes you may use '*'.
     */
    public ?StringSet $volumes = null;

    public function __construct() {
        $this->allowedCSIDrivers = new AllowedCSIDriverSet();
        $this->allowedCapabilities = new StringSet();
        $this->allowedFlexVolumes = new AllowedFlexVolumeSet();
        $this->allowedHostPaths = new AllowedHostPathSet();
        $this->allowedProcMountTypes = new StringSet();
        $this->allowedUnsafeSysctls = new StringSet();
        $this->defaultAddCapabilities = new StringSet();
        $this->forbiddenSysctls = new StringSet();
        $this->fsGroup = new FSGroupStrategyOptions();
        $this->hostPorts = new HostPortRangeSet();
        $this->requiredDropCapabilities = new StringSet();
        $this->runAsGroup = new RunAsGroupStrategyOptions();
        $this->runAsUser = new RunAsUserStrategyOptions();
        $this->runtimeClass = new RuntimeClassStrategyOptions();
        $this->seLinux = new SELinuxStrategyOptions();
        $this->supplementalGroups = new SupplementalGroupsStrategyOptions();
        $this->volumes = new StringSet();
    }
}
