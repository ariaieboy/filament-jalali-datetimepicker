# Filament Jalali Date Time Picker Field
![Ariaieboy Jalali Date Picker](https://preview.dragon-code.pro/Ariaieboy/Jalali-Date-Picker.svg?brand=laravel)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ariaieboy/filament-jalali-datetimepicker.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/filament-jalali-datetimepicker)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ariaieboy/filament-jalali-datetimepicker/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ariaieboy/filament-jalali-datetimepicker/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ariaieboy/filament-jalali-datetimepicker.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/filament-jalali-datetimepicker)

This package is a Drop-in replacement for `DatePicker` and `DateTimePicker` field type you just need to replace those with `JalaliDatePicker` or `JalaliDateTimePicker` and as simple as that you can have Jalali Date Time picker in your app.

it will respect all default DatePicker setting like locale and timezone settings
that you use and it will return the `gregory` .aka `miladi` to the back end.

## Installation

You can install the package via composer:

```bash
composer require ariaieboy/filament-jalali-datetimepicker
```

### Installation via Filament/Form

if you are not
using [filament admin panel](https://filamentphp.com/docs/2.x/admin/installation)
and you want to use this plugin
with [Filament/Form](https://filamentphp.com/docs/2.x/forms/installation) you
must do this steps:

first you need to install our component dependencies:

* [dayjs](https://day.js.org/)
* [@zoomit/dayjs-jalali-plugin](https://github.com/zoomit-org/Dayjs-Jalali-Plugin)

You may install these through NPM:

```bash
npm install dayjs @zoomit/dayjs-jalali-plugin
```

now you must add jalaliDatePicker component to your `app.js`

```js
import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin
    from '../../vendor/filament/notifications/dist/module.esm'
import jalaliDateTimePicker
    from '../../vendor/ariaieboy/filament-jalali-datetimepicker/resources/js/components/jalali-date-time-picker'

Alpine.plugin(jalaliDateTimePicker)
Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)

window.Alpine = Alpine

Alpine.start()
```

## Usage

```php

use Ariaieboy\FilamentJalaliDatetimepicker\Forms\Components\JalaliDatePicker;
use Ariaieboy\FilamentJalaliDatetimepicker\Forms\Components\JalaliDateTimePicker;
 
JalaliDateTimePicker::make('published_at')
JalaliDatePicker::make('date_of_birth')
```
for more information check the default DateTimePicker Docs : https://filamentphp.com/docs/2.x/forms/fields#date-time-picker
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ariaieboy](https://github.com/ariaieboy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
