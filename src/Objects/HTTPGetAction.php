<?php

namespace Moonspot\Kubernetes\Objects;

use Moonspot\Kubernetes\Objects\Sets\HTTPHeaderSet;

class HTTPGetAction extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Host name to connect to, defaults to the pod IP. You probably want to
     * set "Host" in httpHeaders instead.
     */
    public ?string $host = null;

    /**
     * Custom headers to set in the request. HTTP allows repeated headers.
     */
    public ?HTTPHeaderSet $httpHeaders = null;

    /**
     * Path to access on the HTTP server.
     */
    public ?string $path = null;

    /**
     * Name or number of the port to access on the container. Number must be in
     * the range 1 to 65535. Name must be an IANA_SVC_NAME.
     */
    public IntOrString $port;

    /**
     * Scheme to use for connecting to the host. Defaults to HTTP.
     * 
     * Possible enum values:
     *  - `"HTTP"` means that the scheme used will be http://
     *  - `"HTTPS"` means that the scheme used will be https://
     */
    public ?string $scheme = null;

    public function __construct() {
        $this->httpHeaders = new HTTPHeaderSet();
        $this->port = new IntOrString();
    }
}
