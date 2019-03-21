# Cryptocurrency package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![License][ico-license]][link-license]
[![Requires PHP7.1][ico-php]][link-php]

All cryptocurrencies infos in a single package without using a database.

## Installation

``` bash
$ composer require crypto-technology/cryptocurrency
```

## Usage

```php
# See index.php for all examples

// Initialize new CryptocurrencyCollection()
$crypto_coll = new \CryptoTech\Cryptocurrency\CryptocurrencyCollection();
// Load the array with all cryptocurrencies enabled
$crypto_enabled = (include 'config/cryptocurrency.php')['crypto_enabled'];

// Inject the enabled cryptocurrencies' array in the collection
$crypto_coll->loadEnabledCrypto($crypto_enabled);

$cryptocurrency = new \CryptoTech\Cryptocurrency\Cryptocurrency();
$bitcoin = $cryptocurrency->load('Bitcoin');

// Return (int) cryptocurrency id (CoinMarketCap ID)
var_dump($bitcoin->getId());

// Return (string) cryptocurrency name
var_dump($bitcoin->getName());

// Return (string) cryptocurrency symbol
var_dump($bitcoin->getSymbol());

// Return (string) cryptocurrency type
// Can be 'coin' or 'token'
var_dump($bitcoin->getType());

// Return (string) cryptocurrency logo path with specified size
// Size can be '16', '32', '64', '128' or '200'
// Path must be the sub-path that allows you to get the correct logo path
// (sub-path must be point to the parent directory of crypto-logo directory)
var_dump($bitcoin->getLogo('128', '.'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR));

// Return (boolean) cryptocurrency mineable state
var_dump($bitcoin->isMineable());

// Return (string) cryptocurrency description
var_dump($bitcoin->getDescription());

// Return (array) cryptocurrency official project url
var_dump($bitcoin->getProjectUrl());

// Return (array) cryptocurrency explorer urls
// These urls can be used, for example, with sprintf($url, $wallet_address)
// because each url is returned in the format 'https://explorer/address/%s'
// where %s can be replaced with a wallet address for get information
// on that specific wallet address (the page response should be, in almost
// all cases, in json format)
var_dump($bitcoin->getExplorerUrl());

// Return (array) cryptocurrency sourcecode url
var_dump($bitcoin->getSourceCodeUrl());
```

More information can be found in the `CryptocurrencyInterface` interface PhpDocumentation.  
The `Cryptocurrency` class contains, in addition to the get methods, also set methods (only for description and for project, explorer and sourcecode urls), which allow you to momentarily overwrite the default values.

## Changelog

Please see the [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ vendor/bin/phpunit tests
```

## Contributing

Your help is always welcome! Feel free to open issues, ask questions, talk about it and discuss this tool.  
Of course there are some [contributing guidelines](CONTRIBUTING.md) and a [code of conduct](CODE_OF_CONDUCT.md), which I invite you to check out.  
For all other contributions, see below.

## Security

The `CryptoTech\Cryptocurrency` package will be checked for security vulnerabilities using [Roave Security Advisories][link-roave] checker.
If you discover any security related issues, please email [security@cryptotech.srl](mailto:security@cryptotech.srl) instead of using the issue tracker.

## Credits

- [Crypto Technology srl][link-author]
- [Luca Bognolo][link-coauthor]
- [All Contributors][link-contributors]

## Versioning
We use [SemVer][link-semver] for versioning. For the versions available, see [the tags][link-tags] on this repository.

## License

The GNU General Public License version 3. Please see the [license file](LICENSE) for more information.
This work [is licensed](LICENSE) under the [GNU GPL v3][link-license].

[ico-version]: https://img.shields.io/packagist/v/crypto-technology/cryptocurrency.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/crypto-technology/cryptocurrency.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/crypto-technology/cryptocurrency/master.svg?style=flat-square
[ico-license]: https://img.shields.io/github/license/crypto-technology/cryptocurrency.svg?style=flat-square
[ico-php]: https://img.shields.io/badge/php-7.0-red.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/crypto-technology/cryptocurrency
[link-downloads]: https://packagist.org/packages/crypto-technology/cryptocurrency
[link-travis]: https://travis-ci.com/crypto-technology/cryptocurrency
[link-license]: https://www.gnu.org/licenses/gpl-3.0.en.html
[link-php]: https://secure.php.net/downloads.php
[link-roave]: https://github.com/Roave/SecurityAdvisories
[link-author]: https://cryptotech.srl
[link-coauthor]: https://bogny.eu
[link-contributors]: https://github.com/crypto-technology/cryptocurrency/contributors
[link-semver]: https://semver.org/
[link-tags]: https://github.com/crypto-technology/cryptocurrency/tags
