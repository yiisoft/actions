### Example of use of the action [PHPBench](https://github.com/phpbench/phpbench)

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
  
name: benchmark

jobs:
  phpunit:
    uses: yiisoft/actions/.github/workflows/phpbench.yml@master
    with:
      # coverage: pcov / coverage: xdebug / coverage: xdebug2 / coverage: none 
      # extensions: pdo, pdo_pgsql
      # ini-values: date.timezone='UTC'      
      os: >-
        ['ubuntu-latest']
      php: >-
        ['8.0']
      #tools: composer:v2 
```
