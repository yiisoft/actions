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
workflows run after commit into another workflows. You can change this by using a 
[Personal Access Token](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/managing-your-personal-access-tokens)
(apply the `repo` and `workflow` scopes).

Pass your token via secrets. For example:

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

For pull requests from forks, the workflow checks out the fork branch and runs
Rector, but does not commit changes back to the fork branch because GitHub does
not expose write credentials to these runs.
