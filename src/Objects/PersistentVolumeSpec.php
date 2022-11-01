<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class PersistentVolumeSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * AccessModes contains all ways the volume can be mounted. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes
     */
    public ?StringSet $accessModes = null;

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
    public ?AzureFilePersistentVolumeSource $azureFile = null;

    /**
     * A description of the persistent volume's resources and capacity. More
     * info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     */
    public ?array $capacity = null;

    /**
     * CephFS represents a Ceph FS mount on the host that shares a pod's
     * lifetime
     */
    public ?CephFSPersistentVolumeSource $cephfs = null;

    /**
     * Cinder represents a cinder volume attached and mounted on kubelets host
     * machine. More info: https://examples.k8s.io/mysql-cinder-pd/README.md
     */
    public ?CinderPersistentVolumeSource $cinder = null;

    /**
     * ClaimRef is part of a bi-directional binding between PersistentVolume
     * and PersistentVolumeClaim. Expected to be non-nil when bound.
     * claim.VolumeName is the authoritative bind between PV and PVC. More
     * info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#binding
     */
    public ?ObjectReference $claimRef = null;

    /**
     * CSI represents storage that is handled by an external CSI driver (Beta
     * feature).
     */
    public ?CSIPersistentVolumeSource $csi = null;

    /**
     * FC represents a Fibre Channel resource that is attached to a kubelet's
     * host machine and then exposed to the pod.
     */
    public ?FCVolumeSource $fc = null;

    /**
     * FlexVolume represents a generic volume resource that is
     * provisioned/attached using an exec based plugin.
     */
    public ?FlexPersistentVolumeSource $flexVolume = null;

    /**
     * Flocker represents a Flocker volume attached to a kubelet's host machine
     * and exposed to the pod for its usage. This depends on the Flocker
     * control service being running
     */
    public ?FlockerVolumeSource $flocker = null;

    /**
     * GCEPersistentDisk represents a GCE Disk resource that is attached to a
     * kubelet's host machine and then exposed to the pod. Provisioned by an
     * admin. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#gcepersistentdisk
     */
    public ?GCEPersistentDiskVolumeSource $gcePersistentDisk = null;

    /**
     * Glusterfs represents a Glusterfs volume that is attached to a host and
     * exposed to the pod. Provisioned by an admin. More info:
     * https://examples.k8s.io/volumes/glusterfs/README.md
     */
    public ?GlusterfsPersistentVolumeSource $glusterfs = null;

    /**
     * HostPath represents a directory on the host. Provisioned by a developer
     * or tester. This is useful for single-node development and testing only!
     * On-host storage is not supported in any way and WILL NOT WORK in a
     * multi-node cluster. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public ?HostPathVolumeSource $hostPath = null;

    /**
     * ISCSI represents an ISCSI Disk resource that is attached to a kubelet's
     * host machine and then exposed to the pod. Provisioned by an admin.
     */
    public ?ISCSIPersistentVolumeSource $iscsi = null;

    /**
     * Local represents directly-attached storage with node affinity
     */
    public ?LocalVolumeSource $local = null;

    /**
     * A list of mount options, e.g. ["ro", "soft"]. Not validated - mount will
     * simply fail if one is invalid. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes/#mount-options
     */
    public ?StringSet $mountOptions = null;

    /**
     * NFS represents an NFS mount on the host. Provisioned by an admin. More
     * info: https://kubernetes.io/docs/concepts/storage/volumes#nfs
     */
    public ?NFSVolumeSource $nfs = null;

    /**
     * NodeAffinity defines constraints that limit what nodes this volume can
     * be accessed from. This field influences the scheduling of pods that use
     * this volume.
     */
    public ?VolumeNodeAffinity $nodeAffinity = null;

    /**
     * What happens to a persistent volume when released from its claim. Valid
     * options are Retain (default for manually created PersistentVolumes),
     * Delete (default for dynamically provisioned PersistentVolumes), and
     * Recycle (deprecated). Recycle must be supported by the volume plugin
     * underlying this PersistentVolume. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#reclaiming
     * 
     * Possible enum values:
     *  - `"Delete"` means the volume will be deleted from Kubernetes on
     * release from its claim. The volume plugin must support Deletion.
     *  - `"Recycle"` means the volume will be recycled back into the pool of
     * unbound persistent volumes on release from its claim. The volume plugin
     * must support Recycling.
     *  - `"Retain"` means the volume will be left in its current phase
     * (Released) for manual reclamation by the administrator. The default
     * policy is Retain.
     */
    public ?string $persistentVolumeReclaimPolicy = null;

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
     * Quobyte represents a Quobyte mount on the host that shares a pod's
     * lifetime
     */
    public ?QuobyteVolumeSource $quobyte = null;

    /**
     * RBD represents a Rados Block Device mount on the host that shares a
     * pod's lifetime. More info: https://examples.k8s.io/volumes/rbd/README.md
     */
    public ?RBDPersistentVolumeSource $rbd = null;

    /**
     * ScaleIO represents a ScaleIO persistent volume attached and mounted on
     * Kubernetes nodes.
     */
    public ?ScaleIOPersistentVolumeSource $scaleIO = null;

    /**
     * Name of StorageClass to which this persistent volume belongs. Empty
     * value means that this volume does not belong to any StorageClass.
     */
    public ?string $storageClassName = null;

    /**
     * StorageOS represents a StorageOS volume that is attached to the
     * kubelet's host machine and mounted into the pod More info:
     * https://examples.k8s.io/volumes/storageos/README.md
     */
    public ?StorageOSPersistentVolumeSource $storageos = null;

    /**
     * volumeMode defines if a volume is intended to be used with a formatted
     * filesystem or to remain in raw block state. Value of Filesystem is
     * implied when not included in spec.
     */
    public ?string $volumeMode = null;

    /**
     * VsphereVolume represents a vSphere volume attached and mounted on
     * kubelets host machine
     */
    public ?VsphereVirtualDiskVolumeSource $vsphereVolume = null;

    public function __construct() {
        $this->accessModes = new StringSet();
        $this->awsElasticBlockStore = new AWSElasticBlockStoreVolumeSource();
        $this->azureDisk = new AzureDiskVolumeSource();
        $this->azureFile = new AzureFilePersistentVolumeSource();
        $this->cephfs = new CephFSPersistentVolumeSource();
        $this->cinder = new CinderPersistentVolumeSource();
        $this->claimRef = new ObjectReference();
        $this->csi = new CSIPersistentVolumeSource();
        $this->fc = new FCVolumeSource();
        $this->flexVolume = new FlexPersistentVolumeSource();
        $this->flocker = new FlockerVolumeSource();
        $this->gcePersistentDisk = new GCEPersistentDiskVolumeSource();
        $this->glusterfs = new GlusterfsPersistentVolumeSource();
        $this->hostPath = new HostPathVolumeSource();
        $this->iscsi = new ISCSIPersistentVolumeSource();
        $this->local = new LocalVolumeSource();
        $this->mountOptions = new StringSet();
        $this->nfs = new NFSVolumeSource();
        $this->nodeAffinity = new VolumeNodeAffinity();
        $this->photonPersistentDisk = new PhotonPersistentDiskVolumeSource();
        $this->portworxVolume = new PortworxVolumeSource();
        $this->quobyte = new QuobyteVolumeSource();
        $this->rbd = new RBDPersistentVolumeSource();
        $this->scaleIO = new ScaleIOPersistentVolumeSource();
        $this->storageos = new StorageOSPersistentVolumeSource();
        $this->vsphereVolume = new VsphereVirtualDiskVolumeSource();
    }
}
