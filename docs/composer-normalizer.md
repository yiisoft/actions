# composer.json normalizer

Format `composer.json` via [composer-normalize-action](https://github.com/marketplace/actions/composer-normalize-action)
that used [ergebnis/composer-normalize](https://github.com/ergebnis/composer-normalize).

## General usage

```yml
name: "composer.json normalizer"

on:
  pull_request:
    paths:
      - 'composer.json'

jobs:
  composer-normalize:
    uses: yiisoft/actions/.github/workflows/composer-normalizer.yml@master
```

## How trigger GitHub Workflows runs after commit changes

By default, GitHub
[will not trigger](https://docs.github.com/en/actions/security-guides/automatic-token-authentication#using-the-github_token-in-a-workflow)
workflows run after commit into another workflows. You can change this by using a
[Personal Access Token](https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/managing-your-personal-access-tokens)
(apply the `repo` and `workflow` scopes).

Pass your token via secrets. For example:

```yml
jobs:
  composer-normalize:
    uses: yiisoft/actions/.github/workflows/composer-normalizer.yml@master
    secrets:
      token: ${{ secrets.REPO_GITHUB_TOKEN }}
```
