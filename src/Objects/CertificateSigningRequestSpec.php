<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\StringSet;

class CertificateSigningRequestSpec extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Extra information about the requesting user. See user.Info interface for
     * details.
     */
    public ?array $extra = null;

    /**
     * Group information about the requesting user. See user.Info interface for
     * details.
     */
    public ?StringSet $groups = null;

    /**
     * Base64-encoded PKCS#10 CSR data
     */
    public string $request;

    /**
     * Requested signer for the request. It is a qualified name in the form:
     * `scope-hostname.io/name`. If empty, it will be defaulted:
     *  1. If it's a kubelet client certificate, it is assigned
     *     "kubernetes.io/kube-apiserver-client-kubelet".
     *  2. If it's a kubelet serving certificate, it is assigned
     *     "kubernetes.io/kubelet-serving".
     *  3. Otherwise, it is assigned "kubernetes.io/legacy-unknown".
     * Distribution of trust for signers happens out of band. You can select on
     * this field using `spec.signerName`.
     */
    public ?string $signerName = null;

    /**
     * UID information about the requesting user. See user.Info interface for
     * details.
     */
    public ?string $uid = null;

    /**
     * allowedUsages specifies a set of usage contexts the key will be valid
     * for. See: https://tools.ietf.org/html/rfc5280#section-4.2.1.3
     *      https://tools.ietf.org/html/rfc5280#section-4.2.1.12
     * Valid values are:
     *  "signing",
     *  "digital signature",
     *  "content commitment",
     *  "key encipherment",
     *  "key agreement",
     *  "data encipherment",
     *  "cert sign",
     *  "crl sign",
     *  "encipher only",
     *  "decipher only",
     *  "any",
     *  "server auth",
     *  "client auth",
     *  "code signing",
     *  "email protection",
     *  "s/mime",
     *  "ipsec end system",
     *  "ipsec tunnel",
     *  "ipsec user",
     *  "timestamping",
     *  "ocsp signing",
     *  "microsoft sgc",
     *  "netscape sgc"
     */
    public ?StringSet $usages = null;

    /**
     * Information about the requesting user. See user.Info interface for
     * details.
     */
    public ?string $username = null;

    public function __construct() {
        $this->groups = new StringSet();
        $this->usages = new StringSet();
    }
}
