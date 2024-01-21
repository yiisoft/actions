# Using [esc](https://github.com/easy-coding-standard/easy-coding-standard)

```yml
on:
  pull_request:
    paths-ignore:
      - 'docs/**'
      - 'README.md'
      - 'CHANGELOG.md'
      - '.gitignore'
      - '.gitattributes'
      - 'infection.json.dist'
      - 'phpunit.xml.dist'

  push:
    branches: ['main']
    paths-ignore:
      - 'docs/**'
      - 'README.md'
      - 'CHANGELOG.md'
      - '.gitignore'
      - '.gitattributes'
      - 'infection.json.dist'
      - 'phpunit.xml.dist'

name: ecs

jobs:
  easy-coding-standard:
    uses: yiisoft/actions/.github/workflows/ecs.yml@main
    with:
      os: >-
        ['ubuntu-latest']
      php: >-
        ['8.1']
```
