<?php

namespace Moonspot\Kubernetes\Objects;

class Volume extends \Moonspot\Kubernetes\BaseObject {

    /**
     * AWSElasticBlockStore represents an AWS Disk resource that is attached to
     * a kubelet's host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#awselasticblockstore
     */
    public ?AWSElasticBlockStoreVolumeSource $awsElasticBlockStore = null;

    /**
     * AzureDisk represents an Azure Data Disk mount on the host and bind mount
     * to the pod.
     */
    public ?AzureDiskVolumeSource $azureDisk = null;

    /**
     * AzureFile represents an Azure File Service mount on the host and bind
     * mount to the pod.
     */
    public ?AzureFileVolumeSource $azureFile = null;

    /**
     * CephFS represents a Ceph FS mount on the host that shares a pod's
     * lifetime
     */
    public ?CephFSVolumeSource $cephfs = null;

    /**
     * Cinder represents a cinder volume attached and mounted on kubelets host
     * machine. More info: https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public ?CinderVolumeSource $cinder = null;

    /**
     * ConfigMap represents a configMap that should populate this volume
     */
    public ?ConfigMapVolumeSource $configMap = null;

    /**
     * CSI (Container Storage Interface) represents ephemeral storage that is
     * handled by certain external CSI drivers (Beta feature).
     */
    public ?CSIVolumeSource $csi = null;

    /**
     * DownwardAPI represents downward API about the pod that should populate
     * this volume
     */
    public ?DownwardAPIVolumeSource $downwardAPI = null;

    /**
     * EmptyDir represents a temporary directory that shares a pod's lifetime.
     * More info: https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     */
    public ?EmptyDirVolumeSource $emptyDir = null;

    /**
     * Ephemeral represents a volume that is handled by a cluster storage
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
     * 
     * This is a beta feature and only available when the
     * GenericEphemeralVolume feature gate is enabled.
     */
    public ?EphemeralVolumeSource $ephemeral = null;

    /**
     * FC represents a Fibre Channel resource that is attached to a kubelet's
     * host machine and then exposed to the pod.
     */
    public ?FCVolumeSource $fc = null;

    /**
     * FlexVolume represents a generic volume resource that is
     * provisioned/attached using an exec based plugin.
     */
    public ?FlexVolumeSource $flexVolume = null;

    /**
     * Flocker represents a Flocker volume attached to a kubelet's host
     * machine. This depends on the Flocker control service being running
     */
    public ?FlockerVolumeSource $flocker = null;

    /**
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a
     * kubelet's host machine and then exposed to the pod. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public ?GCEPersistentDiskVolumeSource $gcePersistentDisk = null;

    /**
     * GitRepo represents a git repository at a particular revision.
     * DEPRECATED: GitRepo is deprecated. To provision a container with a git
     * repo, mount an EmptyDir into an InitContainer that clones the repo using
     * git, then mount the EmptyDir into the Pod's container.
     */
    public ?GitRepoVolumeSource $gitRepo = null;

    /**
     * Glusterfs represents a Glusterfs mount on the host that shares a pod's
     * lifetime. More info: https://examples.k8s.io/volumes/glusterfs/README.md
     */
    public ?GlusterfsVolumeSource $glusterfs = null;

    /**
     * HostPath represents a pre-existing file or directory on the host machine
     * that is directly exposed to the container. This is generally used for
     * system agents or other privileged things that are allowed to see the
     * host machine. Most containers will NOT need this. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public ?HostPathVolumeSource $hostPath = null;

    /**
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's
     * host machine and then exposed to the pod. More info:
     * https://examples.k8s.io/volumes/iscsi/README.md
     */
    public ?ISCSIVolumeSource $iscsi = null;

    /**
     * Volume's name. Must be a DNS_LABEL and unique within the pod. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public string $name;

    /**
     * NFS represents an NFS mount on the host that shares a pod's lifetime
     * More info: https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public ?NFSVolumeSource $nfs = null;

    /**
     * PersistentVolumeClaimVolumeSource represents a reference to a
     * PersistentVolumeClaim in the same namespace. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#persistentvolumeclaims
     */
    public ?PersistentVolumeClaimVolumeSource $persistentVolumeClaim = null;

    /**
     * PhotonPersistentDisk represents a PhotonController persistent disk
     * attached and mounted on kubelets host machine
     */
    public ?PhotonPersistentDiskVolumeSource $photonPersistentDisk = null;

    /**
     * PortworxVolume represents a portworx volume attached and mounted on
     * kubelets host machine
     */
    public ?PortworxVolumeSource $portworxVolume = null;

    /**
     * Items for all in one resources secrets, configmaps, and downward API
     */
    public ?ProjectedVolumeSource $projected = null;

    /**
     * Quobyte represents a Quobyte mount on the host that shares a pod's
     * lifetime
     */
    public ?QuobyteVolumeSource $quobyte = null;

    /**
     * RBD represents a Rados Block Device mount on the host that shares a
     * pod's lifetime. More info: https://examples.k8s.io/volumes/rbd/README.md
     */
    public ?RBDVolumeSource $rbd = null;

    /**
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on
     * Kubernetes nodes.
     */
    public ?ScaleIOVolumeSource $scaleIO = null;

    /**
     * Secret represents a secret that should populate this volume. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#secret
     */
    public ?SecretVolumeSource $secret = null;

    /**
     * StorageOS represents a StorageOS volume attached and mounted on
     * Kubernetes nodes.
     */
    public ?StorageOSVolumeSource $storageos = null;

    /**
     * VsphereVolume represents a vSphere volume attached and mounted on
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
