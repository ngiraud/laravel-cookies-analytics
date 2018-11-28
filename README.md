# Add Google Analytics and CookieConsent to your application.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ngiraud/laravel-cookies-analytics.svg?style=flat-square)](https://packagist.org/packages/ngiraud/laravel-cookies-analytics)
[![Total Downloads](https://img.shields.io/packagist/dt/ngiraud/laravel-cookies-analytics.svg?style=flat-square)](https://packagist.org/packages/ngiraud/laravel-cookies-analytics)

## Installation

- Install the package via composer:

```bash
composer require ngiraud/laravel-cookies-analytics
```


- Install the [CookieConsent plugin](https://github.com/insites/cookieconsent)
```bash
yarn add cookieconsent
```
or
```bash
npm install cookieconsent --save
```

## Usage

- You can activate/deactivate cookies and google analytics by settings environment variables in your `.env` file :
```bash
GOOGLE_ANALYTICS_ENABLED
GOOGLE_ANALYTICS_ID (mandatory if GOOGLE_ANALYTICS_ENABLED is set to true)
COOKIES_ENABLED
```


- Add the view to the top of your `<head>` section :
``` php
@include('analytics::scripts')
```

- Add the css for the CookieConsent plugin in your css file :
```css
@import "../../node_modules/cookieconsent/build/cookieconsent.min.css";
```


- And these lines in your vuejs index file :
```js
import {CookieConsent} from 'cookieconsent';

if (window.cookieSettings.enabled === true) {
    document.addEventListener('DOMContentLoaded', () => {
        cookieconsent.initialise(window.cookieSettings.content);
    });
}
```

- If you want to customize the popup and the message in the config file, you can publish and edit the config file :
```bash
php artisan vendor:publish --tag=analytics-config
```


**Don't forget to generate and include your css & js files.**

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email contact@ngiraud.me instead of using the issue tracker.

## Credits

- [Nicolas Giraud](https://github.com/ngiraud)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
