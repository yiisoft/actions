# Using [zizmor](https://github.com/zizmorcore/zizmor)

```yml
name: GitHub Actions Security Analysis with zizmor 🌈

on:
  pull_request:
    paths: &paths
      - '.github/**.yml'
      - '.github/**.yaml'
  push:
    branches:
      - master
    paths: *paths

jobs:
  zizmor:
    uses: yiisoft/actions/.github/workflows/zizmor.yml@master
```
