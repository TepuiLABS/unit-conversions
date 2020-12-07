<p align="center">
	<img src="unit-conversions.png" width="612">
</p>

# Perform unit conversions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tepuilabs/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/tepuilabs/unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/tepuilabs/unit-conversions/run-tests?label=tests)](https://github.com/tepuilabs/unit-conversions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/tepuilabs/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/tepuilabs/unit-conversions)


This package can perform various unit conversions.

## Installation

You can install the package via composer:

```bash
composer require tepuilabs/unit-conversions
```

## Usage

``` php
$lbs = \Tepuilabs\UnitConversions\Weight::fromKilograms(100)->toLbs();
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please open a new issue ;)

## Credits

- [angel cruz](https://github.com/abr4xas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
