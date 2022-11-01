<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class ISCSIPersistentVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * chapAuthDiscovery defines whether support iSCSI Discovery CHAP
     * authentication
     */
    public ?bool $chapAuthDiscovery = null;

    /**
     * chapAuthSession defines whether support iSCSI Session CHAP
     * authentication
     */
    public ?bool $chapAuthSession = null;

    /**
     * fsType is the filesystem type of the volume that you want to mount. Tip:
     * Ensure that the filesystem type is supported by the host operating
     * system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#iscsi
     */
    public ?string $fsType = null;

    /**
     * initiatorName is the custom iSCSI Initiator Name. If initiatorName is
     * specified with iscsiInterface simultaneously, new iSCSI interface
     * <target portal>:<volume name> will be created for the connection.
     */
    public ?string $initiatorName = null;

    /**
     * iqn is Target iSCSI Qualified Name.
     */
    public string $iqn;

    /**
     * iscsiInterface is the interface Name that uses an iSCSI transport.
     * Defaults to 'default' (tcp).
     */
    public ?string $iscsiInterface = null;

    /**
     * lun is iSCSI Target Lun number.
     */
    public int $lun;

    /**
     * portals is the iSCSI Target Portal List. The Portal is either an IP or
     * ip_addr:port if the port is other than default (typically TCP ports 860
     * and 3260).
     */
    public ?StringSet $portals = null;

    /**
     * readOnly here will force the ReadOnly setting in VolumeMounts. Defaults
     * to false.
     */
    public ?bool $readOnly = null;

    /**
     * secretRef is the CHAP Secret for iSCSI target and initiator
     * authentication
     */
    public ?SecretReference $secretRef = null;

    /**
     * targetPortal is iSCSI Target Portal. The Portal is either an IP or
     * ip_addr:port if the port is other than default (typically TCP ports 860
     * and 3260).
     */
    public string $targetPortal;

    public function __construct() {
        $this->portals = new StringSet();
        $this->secretRef = new SecretReference();
    }
}
