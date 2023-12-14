#!/bin/bash

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR/..

LATEST=`git -c 'versionsort.suffix=-' ls-remote --tags --sort='v:refname' https://github.com/kubernetes/kubernetes.git | awk '{print $2}' | sed s,refs/tags/,, | fgrep -v '-' | fgrep -v '^' | tail -n 1`

VERSION=${1:-$LATEST}

git checkout -b $VERSION && \
php ./build/build.php --version $VERSION && \
git add src/Objects && \
git commit -m "Kubernetes $VERSION" && \
git tag $VERSION


if [ "$VERSION" == "$LATEST" ]
then
    git checkout main && \
    git merge $VERSION
fi
