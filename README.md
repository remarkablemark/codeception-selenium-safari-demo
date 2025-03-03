# Codeception Selenium Safari Demo

Codeception is installed for acceptance, functional, and unit testing:

1. Edit `tests/Acceptance.suite.yml` to set url of your application. Change PhpBrowser to WebDriver to enable browser testing
2. Edit `tests/Functional.suite.yml` to enable a framework module. Remove this file if you don't use a framework
3. Create your first acceptance tests using `codecept g:cest Acceptance First`
4. Write first test in `tests/Acceptance/FirstCest.php`
5. Run tests using: `codecept run`

## Resources

- [Quickstart](https://codeception.com/quickstart)
- [Webdriver](https://codeception.com/docs/modules/WebDriver)
