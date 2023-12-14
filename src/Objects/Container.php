<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;
use Moonspot\Kubernetes\Objects\Sets\EnvVarSet;
use Moonspot\Kubernetes\Objects\Sets\EnvFromSourceSet;
use Moonspot\Kubernetes\Objects\Sets\ContainerPortSet;
use Moonspot\Kubernetes\Objects\Sets\ContainerResizePolicySet;
use Moonspot\Kubernetes\Objects\Sets\VolumeDeviceSet;
use Moonspot\Kubernetes\Objects\Sets\VolumeMountSet;

class Container extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Arguments to the entrypoint. The container image's CMD is used if this
     * is not provided. Variable references $(VAR_NAME) are expanded using the
     * container's environment. If a variable cannot be resolved, the reference
     * in the input string will be unchanged. Double $$ are reduced to a single
     * $, which allows for escaping the $(VAR_NAME) syntax: i.e. "$$(VAR_NAME)"
     * will produce the string literal "$(VAR_NAME)". Escaped references will
     * never be expanded, regardless of whether the variable exists or not.
     * Cannot be updated. More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     */
    public ?StringSet $args = null;

    /**
     * Entrypoint array. Not executed within a shell. The container image's
     * ENTRYPOINT is used if this is not provided. Variable references
     * $(VAR_NAME) are expanded using the container's environment. If a
     * variable cannot be resolved, the reference in the input string will be
     * unchanged. Double $$ are reduced to a single $, which allows for
     * escaping the $(VAR_NAME) syntax: i.e. "$$(VAR_NAME)" will produce the
     * string literal "$(VAR_NAME)". Escaped references will never be expanded,
     * regardless of whether the variable exists or not. Cannot be updated.
     * More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     */
    public ?StringSet $command = null;

    /**
     * List of environment variables to set in the container. Cannot be
     * updated.
     */
    public ?EnvVarSet $env = null;

    /**
     * List of sources to populate environment variables in the container. The
     * keys defined within a source must be a C_IDENTIFIER. All invalid keys
     * will be reported as an event when the container is starting. When a key
     * exists in multiple sources, the value associated with the last source
     * will take precedence. Values defined by an Env with a duplicate key will
     * take precedence. Cannot be updated.
     */
    public ?EnvFromSourceSet $envFrom = null;

    /**
     * Container image name. More info:
     * https://kubernetes.io/docs/concepts/containers/images This field is
     * optional to allow higher level config management to default or override
     * container images in workload controllers like Deployments and
     * StatefulSets.
     */
    public ?string $image = null;

    /**
     * Image pull policy. One of Always, Never, IfNotPresent. Defaults to
     * Always if :latest tag is specified, or IfNotPresent otherwise. Cannot be
     * updated. More info:
     * https://kubernetes.io/docs/concepts/containers/images#updating-images
     */
    public ?string $imagePullPolicy = null;

    /**
     * Actions that the management system should take in response to container
     * lifecycle events. Cannot be updated.
     */
    public ?Lifecycle $lifecycle = null;

    /**
     * Periodic probe of container liveness. Container will be restarted if the
     * probe fails. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public ?Probe $livenessProbe = null;

    /**
     * Name of the container specified as a DNS_LABEL. Each container in a pod
     * must have a unique name (DNS_LABEL). Cannot be updated.
     */
    public string $name;

    /**
     * List of ports to expose from the container. Not specifying a port here
     * DOES NOT prevent that port from being exposed. Any port which is
     * listening on the default "0.0.0.0" address inside a container will be
     * accessible from the network. Modifying this array with strategic merge
     * patch may corrupt the data. For more information See
     * https://github.com/kubernetes/kubernetes/issues/108255. Cannot be
     * updated.
     */
    public ?ContainerPortSet $ports = null;

    /**
     * Periodic probe of container service readiness. Container will be removed
     * from service endpoints if the probe fails. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public ?Probe $readinessProbe = null;

    /**
     * Resources resize policy for the container.
     */
    public ?ContainerResizePolicySet $resizePolicy = null;

    /**
     * Compute Resources required by this container. Cannot be updated. More
     * info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     */
    public ?ResourceRequirements $resources = null;

    /**
     * SecurityContext defines the security options the container should be run
     * with. If set, the fields of SecurityContext override the equivalent
     * fields of PodSecurityContext. More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/security-context/
     */
    public ?SecurityContext $securityContext = null;

    /**
     * StartupProbe indicates that the Pod has successfully initialized. If
     * specified, no other probes are executed until this completes
     * successfully. If this probe fails, the Pod will be restarted, just as if
     * the livenessProbe failed. This can be used to provide different probe
     * parameters at the beginning of a Pod's lifecycle, when it might take a
     * long time to load data or warm a cache, than during steady-state
     * operation. This cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public ?Probe $startupProbe = null;

    /**
     * Whether this container should allocate a buffer for stdin in the
     * container runtime. If this is not set, reads from stdin in the container
     * will always result in EOF. Default is false.
     */
    public ?bool $stdin = null;

    /**
     * Whether the container runtime should close the stdin channel after it
     * has been opened by a single attach. When stdin is true the stdin stream
     * will remain open across multiple attach sessions. If stdinOnce is set to
     * true, stdin is opened on container start, is empty until the first
     * client attaches to stdin, and then remains open and accepts data until
     * the client disconnects, at which time stdin is closed and remains closed
     * until the container is restarted. If this flag is false, a container
     * processes that reads from stdin will never receive an EOF. Default is
     * false
     */
    public ?bool $stdinOnce = null;

    /**
     * Optional: Path at which the file to which the container's termination
     * message will be written is mounted into the container's filesystem.
     * Message written is intended to be brief final status, such as an
     * assertion failure message. Will be truncated by the node if greater than
     * 4096 bytes. The total message length across all containers will be
     * limited to 12kb. Defaults to /dev/termination-log. Cannot be updated.
     */
    public ?string $terminationMessagePath = null;

    /**
     * Indicate how the termination message should be populated. File will use
     * the contents of terminationMessagePath to populate the container status
     * message on both success and failure. FallbackToLogsOnError will use the
     * last chunk of container log output if the termination message file is
     * empty and the container exited with an error. The log output is limited
     * to 2048 bytes or 80 lines, whichever is smaller. Defaults to File.
     * Cannot be updated.
     */
    public ?string $terminationMessagePolicy = null;

    /**
     * Whether this container should allocate a TTY for itself, also requires
     * 'stdin' to be true. Default is false.
     */
    public ?bool $tty = null;

    /**
     * volumeDevices is the list of block devices to be used by the container.
     */
    public ?VolumeDeviceSet $volumeDevices = null;

    /**
     * Pod volumes to mount into the container's filesystem. Cannot be updated.
     */
    public ?VolumeMountSet $volumeMounts = null;

    /**
     * Container's working directory. If not specified, the container runtime's
     * default will be used, which might be configured in the container image.
     * Cannot be updated.
     */
    public ?string $workingDir = null;

    public function __construct() {
        $this->args = new StringSet();
        $this->command = new StringSet();
        $this->env = new EnvVarSet();
        $this->envFrom = new EnvFromSourceSet();
        $this->lifecycle = new Lifecycle();
        $this->livenessProbe = new Probe();
        $this->ports = new ContainerPortSet();
        $this->readinessProbe = new Probe();
        $this->resizePolicy = new ContainerResizePolicySet();
        $this->resources = new ResourceRequirements();
        $this->securityContext = new SecurityContext();
        $this->startupProbe = new Probe();
        $this->volumeDevices = new VolumeDeviceSet();
        $this->volumeMounts = new VolumeMountSet();
    }
}
