<?php

/**
 * Cryptocurrency list package.
 * All cryptocurrencies infos in a single package without using a database.
 *
 * Copyright (C) 2018-2019 <Crypto Technology srl>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

include 'vendor/autoload.php';

// Initialize new CryptocurrencyCollection()
$crypto_coll = new \CryptoTech\Cryptocurrency\CryptocurrencyCollection();
// Load the array with all cryptocurrencies enabled
$crypto_enabled = (include 'config/cryptocurrency.php')['crypto_enabled'];

// Inject the enabled cryptocurrencies' array in the collection
$crypto_coll->loadEnabledCrypto($crypto_enabled);

echo 'Array $crypto_enabled:'.PHP_EOL;
var_dump($crypto_enabled);
echo 'Collation $crypto_coll:'.PHP_EOL;
var_dump(\CryptoTech\Cryptocurrency\CryptocurrencyCollection::$crypto_enabled);

$bitcoin = new \CryptoTech\Cryptocurrency\Cryptocurrency('Ripple');

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
echo "<img src='".$bitcoin->getLogo('128', '.'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR)."'/>";

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
