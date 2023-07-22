# Filament Jalali Date Time Picker Field

![Ariaieboy Jalali Date Picker](https://preview.dragon-code.pro/Ariaieboy/Jalali-Date-Picker.svg?brand=laravel)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ariaieboy/filament-jalali-datetimepicker.svg?style=flat-square)](https://packagist.org/packages/ariaieboy/filament-jalali-datetimepicker)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ariaieboy/filament-jalali-datetimepicker/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ariaieboy/filament-jalali-datetimepicker/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
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

\Filament\Forms\Components\DateTimePicker::make('birth_date')->jalali();
```

for more information check the default DateTimePicker
Docs : https://filamentphp.com/docs/2.x/forms/fields#date-time-picker

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Upgrading

### v1 to v2

- step 1:Change the package version in you `composer.json` to `^2` and run the composer update command:

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
