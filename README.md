# This package is no longer maintained please upgrade to [ariaieboy/filament-jalali](https://github.com/ariaieboy/filament-jalali)

# Filament Jalali Date Time Picker Field

![Ariaieboy Jalali Date Picker](https://preview.dragon-code.pro/Ariaieboy/Jalali-Date-Picker.svg?brand=laravel)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ariaieboy/filament-jalali-datetimepicker.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/filament-jalali-datetimepicker)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/ariaieboy/filament-jalali-datetimepicker/php-cs-fixer.yml?label=styling)
[![Total Downloads](https://img.shields.io/packagist/dt/ariaieboy/filament-jalali-datetimepicker.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/filament-jalali-datetimepicker)

This package adds jalali support to filament v3 `DatePicker` and `DateTimePicker`.

For Filament v2 you can use the version 1 of this package.

## Installation

You can install the package via composer:

```bash
composer require ariaieboy/filament-jalali-datetimepicker
```

## Usage

```php

use Ariaieboy\FilamentJalaliDatetimepicker\Forms\Components\JalaliDatePicker;
use Ariaieboy\FilamentJalaliDatetimepicker\Forms\Components\JalaliDateTimePicker;
\Filament\Forms\Components\DatePicker::make('birth_date')->jalali();

\Filament\Forms\Components\DateTimePicker::make('birth_date')->jalali(weekdaysShort: true);
```

for more information check the default DateTimePicker
Docs : https://filamentphp.com/docs/2.x/forms/fields#date-time-picker

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Upgrading

### v2 to v3

- step 1: Change the package version in your `composer.json` to `^3` and run the composer update command:

```
        "ariaieboy/filament-jalali-datetimepicker": "^3",
```

- step 2 : If you using the `JalaliDateTimePicker` or `JalaliDatePicker` classes you should remove those and use the default Filament DatePicker class. 
  - For more info check the step 2 of the [v1 to v2](https://github.com/ariaieboy/filament-jalali-datetimepicker?tab=readme-ov-file#v1-to-v2) upgrade guide.
- step 3 (optional) : in V3 we introduced 2 new lang files called `months` and `days` using these 2 file you can customize the months and days labels.
  - To customize the lang files you can use this command:
    - `php artisan vendor:publish --tag=filament-jalali-datetimepicker-translations`
- backward compatibility checks:
  - in V3 we changed some default values if you want to customize these values, you should use the methods after the `jalali` method.
    1. The default day label is `long` to change this you should pass `true` as the first `jalali(weekdaysShort: true)` argument.
    2. We changed the default start of the week to `saturday`
    3. the default format is changed to `Y-m-d` and `Y-m-d H:i:s` for `datePicker` and `dateTimePicker`
  - We changed the underlying package that provide jalali compatibility for dayjs to `@calidy/dayjs-calendarsystems`
  - In V3 we only support `laravel >= 11` and `php >= 8.2`

### v1 to v2

- step 1:Change the package version in your `composer.json` to `^2` and run the composer update command:

```
        "ariaieboy/filament-jalali-datetimepicker": "^2",
```

- step 2 (optional):

  You can change `jalaliDatePicker` and `jalaliDateTimePicker` to the default `DatePicker` and `DateTimePicker` and then
  use `jalali()` method to convert a datepicker to jalali format
  For example:

```php
//convert
JalaliDateTimePicker::make('birth_date'),
// to 
Forms\Components\DateTimePicker::make('birth_date')->jalali(),
//and
//convert
JalaliDatePicker::make('birth_date'),
//to
\Filament\Forms\Components\DatePicker::make('birth_date')->jalali()
```

The old format will work in `v2` but we might remove it in the next major versions.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ariaieboy](https://github.com/ariaieboy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
