### Example of use of the action [PHPUnit](https://github.com/sebastianbergmann/phpunit)

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
  
name: build

jobs:
  phpunit:
    uses: yiisoft/actions/.github/workflows/phpunit.yml@master
    with:
      # coverage: pcov / coverage: xdebug / coverage: xdebug2 / coverage: none 
      # extensions: pdo, pdo_pgsql
      # ini-values: date.timezone='UTC'      
      os: >-
        ['ubuntu-latest', 'windows-latest']
      php: >-
        ['8.0', '8.1']
      #tools: composer:v2 
```
