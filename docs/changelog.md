# Checking CHANGELOG.md updates

Fails the check if the pull request changes any of the whitelisted paths but does not update `CHANGELOG.md`.
The check is skipped when the pull request's base branch isn't `master`.

```yml
name: changelog

on:
  pull_request:
    paths:
      - 'src/**'
      - 'config/**'

permissions:
  contents: read

concurrency:
  group: ${{ github.workflow }}-${{ github.ref }}
  cancel-in-progress: true

jobs:
  changelog:
    uses: yiisoft/actions/.github/workflows/changelog.yml@master
```
