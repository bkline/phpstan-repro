# Unfound Drupal Symbols

This repository presents a repro case for Drupal symbols not found by
PHPStan, even though Drupal is installed as a dependency of the project,
and the PHPStan documentation says that if looks for symbols in the
"Composer dependencies of the analysed project."

## Setup

To demonstrate the problem, perform the following steps.

1. Clone the repository
2. Navigate to the cloned directory in a terminal console window
3. Run `composer install`
4. Run `vendor/bin/phpstan analyse -c phpstan.neon`
