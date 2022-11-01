<?php

namespace Moonspot\Kubernetes\Objects;

class HTTPIngressPath extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Backend defines the referenced service endpoint to which the traffic
     * will be forwarded to.
     */
    public IngressBackend $backend;

    /**
     * Path is matched against the path of an incoming request. Currently it
     * can contain characters disallowed from the conventional "path" part of a
     * URL as defined by RFC 3986. Paths must begin with a '/'. When
     * unspecified, all paths from incoming requests are matched.
     */
    public ?string $path = null;

    /**
     * PathType determines the interpretation of the Path matching. PathType
     * can be one of the following values: * Exact: Matches the URL path
     * exactly. * Prefix: Matches based on a URL path prefix split by '/'.
     * Matching is
     *   done on a path element by element basis. A path element refers is the
     *   list of labels in the path split by the '/' separator. A request is a
     *   match for path p if every p is an element-wise prefix of p of the
     *   request path. Note that if the last element of the path is a substring
     *   of the last element in request path, it is not a match (e.g. /foo/bar
     *   matches /foo/bar/baz, but does not match /foo/barbaz).
     * * ImplementationSpecific: Interpretation of the Path matching is up to
     *   the IngressClass. Implementations can treat this as a separate
     * PathType
     *   or treat it identically to Prefix or Exact path types.
     * Implementations are required to support all path types. Defaults to
     * ImplementationSpecific.
     */
    public ?string $pathType = null;

    public function __construct() {
        $this->backend = new IngressBackend();
    }
}