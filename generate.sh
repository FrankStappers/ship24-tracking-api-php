#!/bin/sh

set -xe
curl --output "ship24-tracking-api.orig.yaml" "https://docs.ship24.com/assets/openapi/ship24-tracking-api.yaml"
cat ship24-tracking-api.orig.yaml | sed '/x-internal: true/d' > ship24-tracking-api.yaml
rm ship24-tracking-api.orig.yaml
patch -p1 ship24-tracking-api.yaml patches/addCourierAccount.patch
openapi-generator generate -i ship24-tracking-api.yaml -g php -o . --additional-properties=invokerPackage=Ship24\\TrackingApi --additional-properties=composerPackageName=ship24/tracking-api --skip-validate-spec
sed -i '' 's#https://github.com/GIT_USER_ID.GIT_REPO_ID.git#https://github.com/FrankStappers/ship24-tracking-api-php#g' README.md
sed -i '' 's#"GIT_USER_ID/GIT_REPO_ID": "\*\@dev"#"ship24/tracking-api": "^1.0"#g' README.md
