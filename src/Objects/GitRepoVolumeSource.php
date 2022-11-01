<?php

namespace Moonspot\Kubernetes\Objects;

class GitRepoVolumeSource extends \Moonspot\Kubernetes\BaseObject {

    /**
     * Target directory name. Must not contain or start with '..'.  If '.' is
     * supplied, the volume directory will be the git repository.  Otherwise,
     * if specified, the volume will contain the git repository in the
     * subdirectory with the given name.
     */
    public ?string $directory = null;

    /**
     * Repository URL
     */
    public string $repository;

    /**
     * Commit hash for the specified revision.
     */
    public ?string $revision = null;
}
