# WP-Stan GitHub Action

This GitHub Action runs PHPStan for WordPress plugins/themes.

## Inputs
- `phpstan-config`: Path to the PHPStan configuration file (default: `./phpstan.neon`)
- `phpstan-level`: Analysis level (default: `max`)

## Example Usage
```yaml
jobs:
  phpstan:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout Code
        uses: actions/checkout@v3
      - name: Run WP-Stan
        uses: tidschi/wp-stan@v1
        with:
          phpstan-config: './custom-phpstan.neon'
          phpstan-level: '5'
