# IndoMonth

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require ezha/indomonth
```

## Usage

```php
use Ezha\IndoMonth\Facades\IndoMonth;

Route::get('monthindo', function() {
    $date = Carbon::now()->format('Y-m-d');

    return IndoMonth::indoMonth($date);
});
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Muhammad Ezha Syafaat][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ezha/indomonth.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ezha/indomonth.svg?style=flat-square
[ico-travis]: https://travis-ci.org/ezhasyafaat/Indo-month.svg?branch=main
[ico-styleci]: https://styleci.io/repos/331256613/shield

[link-packagist]: https://packagist.org/packages/ezha/indomonth
[link-downloads]: https://packagist.org/packages/ezha/indomonth
[link-travis]: https://travis-ci.org/github/ezhasyafaat/Indo-month
[link-styleci]: https://styleci.io/repos/331256613
[link-author]: https://github.com/ezha
[link-contributors]: ../../contributors
