# Codeception Selenium Safari Demo

[Codeception](https://codeception.com/) is installed for acceptance, functional, and unit testing:

1. Edit `tests/Acceptance.suite.yml` to set url of your application. Change `PhpBrowser` to `WebDriver` to enable browser testing
2. Edit `tests/Functional.suite.yml` to enable a framework module. Remove this file if you don't use a framework
3. Create your first acceptance tests using `codecept g:cest Acceptance First`
4. Write first test in `tests/Acceptance/FirstCest.php`
5. Run tests using: `codecept run`

## Prerequisites

### PHP

- Composer

### Node.js

- NPM

### Safari

You must enable the `Allow Remote Automation` option in Safari's Develop menu to control Safari via WebDriver:

1. Open Safari.
2. Go to the `Safari` menu in the top left corner.
3. Select `Settings...`.
4. Navigate to the `Developer` tab.
5. Check the checkbox next to `Allow remote automation`.

See [instructions](https://github.com/remarkablemark/codeception-selenium-safari-demo/wiki/Safari-WebDriver).

## Install

Install the dependencies:

```sh
composer install
```

```sh
npm install
```

## Run

Launch [Selenium](https://www.npmjs.com/package/selenium-standalone):

```sh
npm start # npx selenium-standalone install && npx selenium-standalone start
```

Tests are executed with the `run` command:

```sh
php vendor/bin/codecept run --steps
```

Or run the script:

```sh
composer test
```

## Resources

- [Quickstart](https://codeception.com/quickstart)
- [Webdriver](https://codeception.com/docs/modules/WebDriver)
