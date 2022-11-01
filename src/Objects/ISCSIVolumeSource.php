<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ISCSIVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * whether support iSCSI Discovery CHAP authentication
     */
    public ?bool $chapAuthDiscovery = null;

    /**
     * whether support iSCSI Session CHAP authentication
     */
    public ?bool $chapAuthSession = null;

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that
     * the filesystem type is supported by the host operating system. Examples:
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     * More info: https://kubernetes.io/docs/concepts/storage/volumes#iscsi
     */
    public ?string $fsType = null;

    /**
     * Custom iSCSI Initiator Name. If initiatorName is specified with
     * iscsiInterface simultaneously, new iSCSI interface <target
     * portal>:<volume name> will be created for the connection.
     */
    public ?string $initiatorName = null;

    /**
     * Target iSCSI Qualified Name.
     */
    public string $iqn;

    /**
     * iSCSI Interface Name that uses an iSCSI transport. Defaults to 'default'
     * (tcp).
     */
    public ?string $iscsiInterface = null;

    /**
     * iSCSI Target Lun number.
     */
    public int $lun;

    /**
     * iSCSI Target Portal List. The portal is either an IP or ip_addr:port if
     * the port is other than default (typically TCP ports 860 and 3260).
     */
    public ?StringSet $portals = null;

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults
     * to false.
     */
    public ?bool $readOnly = null;

    /**
     * CHAP Secret for iSCSI target and initiator authentication
     */
    public ?LocalObjectReference $secretRef = null;

    /**
     * iSCSI Target Portal. The Portal is either an IP or ip_addr:port if the
     * port is other than default (typically TCP ports 860 and 3260).
     */
    public string $targetPortal;

    public function __construct() {
        $this->portals = new StringSet();
        $this->secretRef = new LocalObjectReference();
    }
}
