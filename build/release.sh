#!/bin/bash

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR/..

git checkout -b $1 && \
php ./build/build.php --version $1 && \
git commit -m "Kubernetes $1" && \
git push origin $1 && \
git checkout main
