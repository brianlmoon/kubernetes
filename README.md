# Kubernetes Objects

This library builds, imports, and exports Kubernetes objects. The classes are
all built using the Swagger files in the [kubernetes/kubernetes](https://github.com/kubernetes/kubernetes)
repository.

The original purpose for building this library was for writing applications
that interact with Kubernetes objects. It is not the intention that this
library be used to build configuration management repositories. The PHP code
for managing objects would likely be more verbose and complex than simply
writing the needed YAML.

## Version Compatibility

The versions of this library follow the major/minor release versions of the
official Kubernetes releases. Only versions from 1.21 forward are supported.

## Example

```php
$configmap = \Moonspot\Kubernetes\Kubernetes::new('ConfigMap');

$configmap->metadata->name = 'MyConfigMap';
$configmap->metadata->labels = [
    "app-name" => 'MyApp'
];
$configmap->data = [
    'config.ini' => "some_setting = 1\nsome_setting = 2\n"
];

echo $configmap->toYaml();
```
Result:
```yaml
---
apiVersion: v1
data:
  config.ini: |
    some_setting = 1
    some_setting = 2
kind: ConfigMap
metadata:
  labels:
    app-name: MyApp
  name: MyConfigMap
...
```

## Importing

The factory method of the Kubernetes class will auto-detect the kind of object
and create it.

```php

$configmap = \Moonspot\Kubernetes\Kubernetes::factory(file_get_contents('./configmap.yaml'));

echo $configmap->metadata->name . "\n";

```
Result:
```
MyConfigMap
```
