# Cryptocurrency package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![Last commit][ico-commit]][link-commit]
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
# For Windows system
$ composer test-win

# For Unix system
$ composer test-unix
```

## Contributing

Your help is always welcome! Feel free to open issues, ask questions, talk about it and discuss this tool.  
Of course there are some [contributing guidelines](CONTRIBUTING.md) and a [code of conduct](CODE_OF_CONDUCT.md), which I invite you to check out.  
For all other contributions, see below.

After every code changes, but before submit your pull request, please apply Php Cs Fixer code fixing:
``` bash
# For Windows system
$ composer php-cs-fixer-win

# For Unix system
$ composer php-cs-fixer-unix
```

## Security

The `CryptoTech\Cryptocurrency` package will be checked for security vulnerabilities using [Roave Security Advisories][link-roave] checker.
If you discover any security related issues, please email [security@cryptotech.srl](mailto:security@cryptotech.srl) instead of using the issue tracker.

## Code

cloc|github.com/AlDanial/cloc v 1.80  T=0.03 s (1995.2 files/s, 115665.7 lines/s)
--- | ---

Language|files|blank %|comment %|code|scale|3rd|gen.|equiv
:-------|-------:|-------:|-------:|-------:|-------:|-------:|-------:|-------:
PHP|63|11.38|48.77|1475|3.5|5162.5
Markdown|3|24.84|0.00|121|1|121
JSON|1|0.00|0.00|63|2.5|157.5
YAML|1|23.53|0.00|13|0.9|11.7
--------|--------|--------|--------|--------|--------|--------|--------|--------
SUM:|68|11.80|45.79|1672|x|3.26|=|5452.70

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
[ico-commit]: https://img.shields.io/github/last-commit/crypto-technology/cryptocurrency.svg?style=flat-square
[ico-license]: https://img.shields.io/github/license/crypto-technology/cryptocurrency.svg?style=flat-square
[ico-php]: https://img.shields.io/badge/php-7.1-blue.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/crypto-technology/cryptocurrency
[link-downloads]: https://packagist.org/packages/crypto-technology/cryptocurrency
[link-travis]: https://travis-ci.com/crypto-technology/cryptocurrency
[link-commit]: https://github.com/crypto-technology/cryptocurrency/commits
[link-license]: https://www.gnu.org/licenses/gpl-3.0.en.html
[link-php]: https://secure.php.net/downloads.php
[link-roave]: https://github.com/Roave/SecurityAdvisories
[link-author]: https://cryptotech.srl
[link-coauthor]: https://bogny.eu
[link-contributors]: https://github.com/crypto-technology/cryptocurrency/contributors
[link-semver]: https://semver.org/
[link-tags]: https://github.com/crypto-technology/cryptocurrency/tags
