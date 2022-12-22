# Using [Infection](https://infection.github.io/) mutation framework with [Infection Static Analysis Plugin](https://github.com/Roave/infection-static-analysis-plugin)

```yml
  pull_request:
    paths-ignore:
      - 'docs/**'
      - 'README.md'
      - 'CHANGELOG.md'
      - '.gitignore'
      - '.gitattributes'
      - 'infection.json.dist'
      - 'psalm.xml'

  push:
    paths-ignore:
      - 'docs/**'
      - 'README.md'
      - 'CHANGELOG.md'
      - '.gitignore'
      - '.gitattributes'
      - 'infection.json.dist'
      - 'psalm.xml'

name: mutation test

jobs:
  mutation:
    uses: yiisoft/actions/.github/workflows/roave-infection.yml@master
    with:
      os: >-
        ['ubuntu-latest']
      php: >-
        ['8.1']
    secrets:
      STRYKER_DASHBOARD_API_KEY: ${{ secrets.STRYKER_DASHBOARD_API_KEY }}
```
