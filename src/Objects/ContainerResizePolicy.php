<?php

namespace Moonspot\Kubernetes\Objects;

class ContainerResizePolicy extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Name of the resource to which this resource resize policy applies.
     * Supported values: cpu, memory.
     */
    public string $resourceName;

    /**
     * Restart policy to apply when specified resource is resized. If not
     * specified, it defaults to NotRequired.
     */
    public string $restartPolicy;
}
