# Using [Rector](https://github.com/rectorphp/rector)

## General usage

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

name: rector

jobs:
  rector:
    uses: yiisoft/actions/.github/workflows/rector.yml@master
    with:
      os: >-
        ['ubuntu-latest']
      php: >-
        ['8.0']
```

## How trigger GitHub Workflows runs after commit rector changes

By default, GitHub
[will not trigger](https://docs.github.com/en/actions/security-guides/automatic-token-authentication#using-the-github_token-in-a-workflow)
workflows run after commit into another workflows. You can change this by usage a 
[Personal Access Token](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/managing-your-personal-access-tokens).

Pass your token via secrets. For example, add 

```yml
jobs:
  rector:
    uses: yiisoft/actions/.github/workflows/rector.yml@master
    with:
      os: >-
        ['ubuntu-latest']
      php: >-
        ['8.0']
    secrets:
      token: ${{ secrets.REPO_GITHUB_TOKEN }}
```
