<?php

namespace Moonspot\Kubernetes\Objects;

class Volume extends \Moonspot\Kubernetes\BaseObject {

    /**
     * awsElasticBlockStore represents an AWS Disk resource that is attached to
     * a kubelet's host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     */
    public ?AWSElasticBlockStoreVolumeSource $awsElasticBlockStore = null;

    /**
     * azureDisk represents an Azure Data Disk mount on the host and bind mount
     * to the pod.
     */
    public ?AzureDiskVolumeSource $azureDisk = null;

    /**
     * azureFile represents an Azure File Service mount on the host and bind
     * mount to the pod.
     */
    public ?AzureFileVolumeSource $azureFile = null;

    /**
     * cephFS represents a Ceph FS mount on the host that shares a pod's
     * lifetime
     */
    public ?CephFSVolumeSource $cephfs = null;

    /**
     * cinder represents a cinder volume attached and mounted on kubelets host
     * machine. More info: https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public ?CinderVolumeSource $cinder = null;

    /**
     * configMap represents a configMap that should populate this volume
     */
    public ?ConfigMapVolumeSource $configMap = null;

    /**
     * csi (Container Storage Interface) represents ephemeral storage that is
     * handled by certain external CSI drivers (Beta feature).
     */
    public ?CSIVolumeSource $csi = null;

    /**
     * downwardAPI represents downward API about the pod that should populate
     * this volume
     */
    public ?DownwardAPIVolumeSource $downwardAPI = null;

    /**
     * emptyDir represents a temporary directory that shares a pod's lifetime.
     * More info: https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     */
    public ?EmptyDirVolumeSource $emptyDir = null;

    /**
     * ephemeral represents a volume that is handled by a cluster storage
     * driver. The volume's lifecycle is tied to the pod that defines it - it
     * will be created before the pod starts, and deleted when the pod is
     * removed.
     * 
     * Use this if: a) the volume is only needed while the pod runs, b)
     * features of normal volumes like restoring from snapshot or capacity
     *    tracking are needed,
     * c) the storage driver is specified through a storage class, and d) the
     * storage driver supports dynamic volume provisioning through
     *    a PersistentVolumeClaim (see EphemeralVolumeSource for more
     *    information on the connection between this volume type
     *    and PersistentVolumeClaim).
     * 
     * Use PersistentVolumeClaim or one of the vendor-specific APIs for volumes
     * that persist for longer than the lifecycle of an individual pod.
     * 
     * Use CSI for light-weight local ephemeral volumes if the CSI driver is
     * meant to be used that way - see the documentation of the driver for more
     * information.
     * 
     * A pod can use both types of ephemeral volumes and persistent volumes at
     * the same time.
     */
    public ?EphemeralVolumeSource $ephemeral = null;

    /**
     * fc represents a Fibre Channel resource that is attached to a kubelet's
     * host machine and then exposed to the pod.
     */
    public ?FCVolumeSource $fc = null;

    /**
     * flexVolume represents a generic volume resource that is
     * provisioned/attached using an exec based plugin.
     */
    public ?FlexVolumeSource $flexVolume = null;

    /**
     * flocker represents a Flocker volume attached to a kubelet's host
     * machine. This depends on the Flocker control service being running
     */
    public ?FlockerVolumeSource $flocker = null;

    /**
     * gcePersistentDisk represents a GCE Disk resource that is attached to a
     * kubelet's host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public ?GCEPersistentDiskVolumeSource $gcePersistentDisk = null;

    /**
     * gitRepo represents a git repository at a particular revision.
     * DEPRECATED: GitRepo is deprecated. To provision a container with a git
     * repo, mount an EmptyDir into an InitContainer that clones the repo using
     * git, then mount the EmptyDir into the Pod's container.
     */
    public ?GitRepoVolumeSource $gitRepo = null;

    /**
     * glusterfs represents a Glusterfs mount on the host that shares a pod's
     * lifetime. More info: https://examples.k8s.io/volumes/glusterfs/README.md
     */
    public ?GlusterfsVolumeSource $glusterfs = null;

    /**
     * hostPath represents a pre-existing file or directory on the host machine
     * that is directly exposed to the container. This is generally used for
     * system agents or other privileged things that are allowed to see the
     * host machine. Most containers will NOT need this. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public ?HostPathVolumeSource $hostPath = null;

    /**
     * iscsi represents an ISCSI Disk resource that is attached to a kubelet's
     * host machine and then exposed to the pod. More info:
     * https://examples.k8s.io/volumes/iscsi/README.md
     */
    public ?ISCSIVolumeSource $iscsi = null;

    /**
     * name of the volume. Must be a DNS_LABEL and unique within the pod. More
     * info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public string $name;

    /**
     * nfs represents an NFS mount on the host that shares a pod's lifetime
     * More info: https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public ?NFSVolumeSource $nfs = null;

    /**
     * persistentVolumeClaimVolumeSource represents a reference to a
     * PersistentVolumeClaim in the same namespace. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public ?PersistentVolumeClaimVolumeSource $persistentVolumeClaim = null;

    /**
     * photonPersistentDisk represents a PhotonController persistent disk
     * attached and mounted on kubelets host machine
     */
    public ?PhotonPersistentDiskVolumeSource $photonPersistentDisk = null;

    /**
     * portworxVolume represents a portworx volume attached and mounted on
     * kubelets host machine
     */
    public ?PortworxVolumeSource $portworxVolume = null;

    /**
     * projected items for all in one resources secrets, configmaps, and
     * downward API
     */
    public ?ProjectedVolumeSource $projected = null;

    /**
     * quobyte represents a Quobyte mount on the host that shares a pod's
     * lifetime
     */
    public ?QuobyteVolumeSource $quobyte = null;

    /**
     * rbd represents a Rados Block Device mount on the host that shares a
     * pod's lifetime. More info: https://examples.k8s.io/volumes/rbd/README.md
     */
    public ?RBDVolumeSource $rbd = null;

    /**
     * scaleIO represents a ScaleIO persistent volume attached and mounted on
     * Kubernetes nodes.
     */
    public ?ScaleIOVolumeSource $scaleIO = null;

    /**
     * secret represents a secret that should populate this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     */
    public ?SecretVolumeSource $secret = null;

    /**
     * storageOS represents a StorageOS volume attached and mounted on
     * Kubernetes nodes.
     */
    public ?StorageOSVolumeSource $storageos = null;

    /**
     * vsphereVolume represents a vSphere volume attached and mounted on
     * kubelets host machine
     */
    public ?VsphereVirtualDiskVolumeSource $vsphereVolume = null;

    public function __construct() {
        $this->awsElasticBlockStore = new AWSElasticBlockStoreVolumeSource();
        $this->azureDisk = new AzureDiskVolumeSource();
        $this->azureFile = new AzureFileVolumeSource();
        $this->cephfs = new CephFSVolumeSource();
        $this->cinder = new CinderVolumeSource();
        $this->configMap = new ConfigMapVolumeSource();
        $this->csi = new CSIVolumeSource();
        $this->downwardAPI = new DownwardAPIVolumeSource();
        $this->emptyDir = new EmptyDirVolumeSource();
        $this->ephemeral = new EphemeralVolumeSource();
        $this->fc = new FCVolumeSource();
        $this->flexVolume = new FlexVolumeSource();
        $this->flocker = new FlockerVolumeSource();
        $this->gcePersistentDisk = new GCEPersistentDiskVolumeSource();
        $this->gitRepo = new GitRepoVolumeSource();
        $this->glusterfs = new GlusterfsVolumeSource();
        $this->hostPath = new HostPathVolumeSource();
        $this->iscsi = new ISCSIVolumeSource();
        $this->nfs = new NFSVolumeSource();
        $this->persistentVolumeClaim = new PersistentVolumeClaimVolumeSource();
        $this->photonPersistentDisk = new PhotonPersistentDiskVolumeSource();
        $this->portworxVolume = new PortworxVolumeSource();
        $this->projected = new ProjectedVolumeSource();
        $this->quobyte = new QuobyteVolumeSource();
        $this->rbd = new RBDVolumeSource();
        $this->scaleIO = new ScaleIOVolumeSource();
        $this->secret = new SecretVolumeSource();
        $this->storageos = new StorageOSVolumeSource();
        $this->vsphereVolume = new VsphereVirtualDiskVolumeSource();
    }
}
