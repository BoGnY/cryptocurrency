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

namespace CryptoTech\Cryptocurrency;

final class CryptocurrencyCollection
{
    /**
     * List of enabled cryptocurrencies.
     *
     * @var array
     */
    public static $crypto_enabled = [];

    /**
     * Load all enabled cryptocurrencies.
     *
     * @param array $crypto_enabled
     *
     * @return \CryptoTech\Cryptocurrency\CryptocurrencyCollection
     */
    public function loadEnabledCrypto(array $crypto_enabled): CryptocurrencyCollection
    {
        foreach ($crypto_enabled as $crypto) {
            $this->addCrypto($crypto);
        }

        return $this;
    }

    /**
     * Add a crypto to the cryptocurrencies list.
     *
     * @param string $crypto
     *
     * @return \CryptoTech\Cryptocurrency\CryptocurrencyCollection
     */
    public function addCrypto($crypto): CryptocurrencyCollection
    {
        array_push(self::$crypto_enabled, $crypto);

        return $this;
    }
}
