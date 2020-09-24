# Get random programming quotes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abhiteshd/programming-quotes.svg?style=flat-square)](https://packagist.org/packages/abhiteshd/programming-quotes)

[![Total Downloads](https://img.shields.io/packagist/dt/abhiteshd/programming-quotes.svg?style=flat-square)](https://packagist.org/packages/abhiteshd/programming-quotes)

Get random quotes on programming by contributors like Dennis Ritchie


## Installation

You can install the package via composer:

```bash
composer require abhiteshd/programming-quotes
```

## Usage

``` php
$programmingQuotes = new ProgrammingQuotes($client);

$randomQuote = $programmingQuotes->getRandomQuote();
```

``` php
-- Laravel usage

$randomQuote = RandomQuotes::getRandomQuote();

// artisan command
php artisan random-quotes

// the view/config can be overriden after you have published them via
php artisan vendor:publish

```

### Testing

``` bash
refer to the test files
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email abhitesh.das@gmail.com instead of using the issue tracker.

## Credits

- [Abhitesh Das](https://github.com/abhiteshd)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
