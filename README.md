# PHPFramework Plugin: Airbrake

This package is a plugin for [PHPFramework](https://github.com/app-zap/PHPFramework).

## Installation

Include this package as requirement in your `composer.json`. For example:

    {
      ...
      "require": {
        ...
        "app-zap/phpframework-airbrake": "dev-develop"
      }
    }

To load the plugin enable it in your `settings.ini`:

    [phpframework]
    plugins.AppZap\PHPFrameworkAirbrake = true

## Configuration

### settings.ini section `phpframework-airbrake`
| option | default | description |
| ------ | ------- | ----------- |
| api_key | | API Key for airbrake |
| enable | false | Enables exception logging with airbrake |
| environment | NO_ENVIRONMENT_SET | Should be set to distiguish different environments. E.g. `dev`, `staging`, `live` |
| host | | URL of your airbrake host |
| resource | | Resource to call to log exceptions |
