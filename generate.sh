#!/bin/sh

set -xe
openapi-generator generate -i ship24-tracking-api.yaml -g php -o . --additional-properties=invokerPackage=Ship24\\TrackingApi --additional-properties=composerPackageName=ship24/tracking-api
