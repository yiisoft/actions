# Using [zizmor](https://github.com/zizmorcore/zizmor)

```yml
on:
  pull_request:
    paths:
      - '.github/**.yml'
      - '.github/**.yaml'

  push:
    branches:
      - master
    paths:
      - '.github/**.yml'
      - '.github/**.yaml'

name: zizmor

jobs:
  zizmor:
    uses: yiisoft/actions/.github/workflows/zizmor.yml@master
```
