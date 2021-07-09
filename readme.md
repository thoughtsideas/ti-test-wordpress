# TI Test WordPress Site

⚠️ Archived: 2021-07-09 ⚠️

[![license](https://img.shields.io/github/license/thoughtsideas/ti-test-wordpress.svg)](https://github.com/thoughtsideas/ti-test-wordpress)  [![GitHub Release](https://img.shields.io/github/release/thoughtsideas/ti-test-wordpress.svg)](https://github.com/thoughtsideas/ti-test-wordpress)  ![CircleCI](https://img.shields.io/circleci/build/github/thoughtsideas/ti-test-wordpress/master.svg?token=dedf506a4ac3be8f191b429ac510be9dde47d179)  [![GitHub issues](https://img.shields.io/github/issues/thoughtsideas/ti-test-wordpress.svg)](https://github.com/thoughtsideas/ti-test-wordpress)  ![GitHub Pull Requests](https://img.shields.io/github/issues-pr-raw/thoughtsideas/ti-test-wordpress.svg)

## Project URLS

- [GitHub Readme](https://github.com/thoughtsideas/ti-test-wordpress/blob/master/readme.md)
- [Local](https://ti-test-wordpress.test/)
- [Production](https://ti-test-wordpress.heroku.com/)

## Development Dependencies

These tools are needed to develop the site locally.

- [GIT](https://git-scm.com/downloads)
- [PHP](https://php.net/)
  - [Composer](https://getcomposer.org/)
  - [Codeception](https://codeception.com/)
  - [PHP dotenv](https://github.com/vlucas/phpdotenv)
  - [PHP Unit](https://phpunit.de/)
  - [WordPress](https://wordpress.org/)
- [MySQL](https://mysql.com/)
- [ [Apache](https://httpd.apache.org/) | [Nginx](https://www.nginx.com/) ]

Most of this can be acquired using [MAMP](https://www.mamp.info/en/mamp-pro/) or [Docker](https://www.docker.com/).
Use you preferred method for developing locally.

## Documentation

During the Alpha/Beta stages, due to constant changes, documentation will be mainly written in-line. With a dedicated section being created at the first major release.

## Folder Structure

```

├── _config
├── _scripts
├── .circleci
├── html
│   ├── index.php
│   ├── wp-config.php
│   ├── wp-content
│   │   ├── plugins
│   │   ├── mu-plugins
│   │   ├── themes
│   │   └── languages
│   └── wp
├── shared
├── vendor
├── app.json
├── composer.json
├── Procfile
├── readme.md
└── wp-cli.yml

```

- `/_scripts` hold the bash scripts used for setting up and running tasks on the environment.
- `/public_html` files that need to be accessed by the public.
- `/public_html/wp-content/` contains WordPress dependencies.
- `/shared` files shared between builds. For example uploaded images and language files.
- `/vendor` is where the Composer managed dependencies are installed to.
- `composer.json` loads the PHP dependencies for this project.
- `sample.env` sampled file with our environment variables are set.

## Setup

- Install composers dependencies `composer install --ignore-platform-reqs`.
- Duplicate and rename the `/sample.env` file to `/.env`. Updating each variable to match your local environment.
- Import your database
-

## Reporting Issues

If you spot any issues please create a ticket via GitHub's Issue Tracker. Including the issue, the browser and operating system, and how to replicate it. If the issue is security related please use the contact information below.

## Contributing to this project

This project follow the WordPress Coding Standard for [PHP](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/), [HTML](https://make.wordpress.org/core/handbook/best-practices/coding-standards/html/), [CSS](https://make.wordpress.org/core/handbook/best-practices/coding-standards/css/) and [JavaScript](https://make.wordpress.org/core/handbook/best-practices/coding-standards/javascript/).

## Contact

Thoughts & Ideas - [hello@thoughtsideas.uk](hello@thoughtsideas.uk)

## Copyright

Unless otherwise stated © Thoughts & Ideas Limited. All rights reserved.
