# Composer template for Drupal projects with Lando

[![CI](https://github.com/drupal-composer/drupal-project/actions/workflows/ci.yml/badge.svg?branch=9.x)](https://github.com/drupal-composer/drupal-project/actions/workflows/ci.yml)

This project template provides a starter kit for managing your site
dependencies with [Composer](https://getcomposer.org/).

## Requirements
- Lando https://docs.lando.dev/basics/
- Composer https://getcomposer.org/
- PHP 7.3^

## Install
1. Clone and go into repo
```
git clone https://github.com/msbodetti/drupal-9.git
cd drupal-9
```
2. Start up lando
``lando start``
3. Install dependencies
```
lando composer install OR composer install
```
4. Run through Drupal installation in browser and enter db info.
You can get lando db info using below command
```
lando info
```
5. Enable custom Ninja Stats Content Entity module in the browser OR run
``lando drush en ninja_stats``
6. Add new ninja_stats item in browser i.e. Manager > Content > Ninja Stats
7. Enable JSON API module in browser i.e. Manager > Extend > JSON:API (Optionally install and enable JSON:API Extra and JSON API Defaults for extra settings)
8. Check out the jsonapi for the Ninja Stat i.e. ``http://drupal-9.lndo.site:8000/jsonapi/ninja_stats/ninja_stats/``

