<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;
use Moonspot\Kubernetes\Objects\Sets\EnvVarSet;
use Moonspot\Kubernetes\Objects\Sets\EnvFromSourceSet;
use Moonspot\Kubernetes\Objects\Sets\ContainerPortSet;
use Moonspot\Kubernetes\Objects\Sets\VolumeDeviceSet;
use Moonspot\Kubernetes\Objects\Sets\VolumeMountSet;

class EphemeralContainer extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Arguments to the entrypoint. The docker image's CMD is used if this is
     * not provided. Variable references $(VAR_NAME) are expanded using the
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
     * Entrypoint array. Not executed within a shell. The docker image's
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
     * Docker image name. More info:
     * https://kubernetes.io/docs/concepts/containers/images
     */
    public ?string $image = null;

    /**
     * Image pull policy. One of Always, Never, IfNotPresent. Defaults to
     * Always if :latest tag is specified, or IfNotPresent otherwise. Cannot be
     * updated. More info:
     * https://kubernetes.io/docs/concepts/containers/images#updating-images
     * 
     * Possible enum values:
     *  - `"Always"` means that kubelet always attempts to pull the latest
     * image. Container will fail If the pull fails.
     *  - `"IfNotPresent"` means that kubelet pulls if the image isn't present
     * on disk. Container will fail if the image isn't present and the pull
     * fails.
     *  - `"Never"` means that kubelet never pulls an image, but only uses a
     * local image. Container will fail if the image isn't present
     */
    public ?string $imagePullPolicy = null;

    /**
     * Lifecycle is not allowed for ephemeral containers.
     */
    public ?Lifecycle $lifecycle = null;

    /**
     * Probes are not allowed for ephemeral containers.
     */
    public ?Probe $livenessProbe = null;

    /**
     * Name of the ephemeral container specified as a DNS_LABEL. This name must
     * be unique among all containers, init containers and ephemeral
     * containers.
     */
    public string $name;

    /**
     * Ports are not allowed for ephemeral containers.
     */
    public ?ContainerPortSet $ports = null;

    /**
     * Probes are not allowed for ephemeral containers.
     */
    public ?Probe $readinessProbe = null;

    /**
     * Resources are not allowed for ephemeral containers. Ephemeral containers
     * use spare resources already allocated to the pod.
     */
    public ?ResourceRequirements $resources = null;

    /**
     * Optional: SecurityContext defines the security options the ephemeral
     * container should be run with. If set, the fields of SecurityContext
     * override the equivalent fields of PodSecurityContext.
     */
    public ?SecurityContext $securityContext = null;

    /**
     * Probes are not allowed for ephemeral containers.
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
     * If set, the name of the container from PodSpec that this ephemeral
     * container targets. The ephemeral container will be run in the namespaces
     * (IPC, PID, etc) of this container. If not set then the ephemeral
     * container uses the namespaces configured in the Pod spec.
     * 
     * The container runtime must implement support for this feature. If the
     * runtime does not support namespace targeting then the result of setting
     * this field is undefined.
     */
    public ?string $targetContainerName = null;

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
     * 
     * Possible enum values:
     *  - `"FallbackToLogsOnError"` will read the most recent contents of the
     * container logs for the container status message when the container exits
     * with an error and the terminationMessagePath has no contents.
     *  - `"File"` is the default behavior and will set the container status
     * message to the contents of the container's terminationMessagePath when
     * the container exits.
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
     * Pod volumes to mount into the container's filesystem. Subpath mounts are
     * not allowed for ephemeral containers. Cannot be updated.
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
        $this->resources = new ResourceRequirements();
        $this->securityContext = new SecurityContext();
        $this->startupProbe = new Probe();
        $this->volumeDevices = new VolumeDeviceSet();
        $this->volumeMounts = new VolumeMountSet();
    }
}
