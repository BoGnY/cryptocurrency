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

namespace CryptoTech\Cryptocurrency\Tests;

use CryptoTech\Cryptocurrency\Bitcoin;
use CryptoTech\Cryptocurrency\Cryptocurrency;
use CryptoTech\Cryptocurrency\CryptocurrencyCollection;
use CryptoTech\Cryptocurrency\Ethereum;
use CryptoTech\Cryptocurrency\Exception\CryptoNotEnabledException;
use CryptoTech\Cryptocurrency\Exception\CryptoNotFoundException;
use CryptoTech\Cryptocurrency\Ripple;
use PHPUnit\Framework\TestCase;

final class CryptocurrencyTest extends TestCase
{
    public function test_enabled_cryptocurrency(): array
    {
        $enabled_cryptocurrency = [
            'Bitcoin',
            'Ethereum',
            'Ripple',
        ];
        $this->assertNotEmpty($enabled_cryptocurrency);

        return $enabled_cryptocurrency;
    }

    /**
     * @depends test_enabled_cryptocurrency
     */
    public function test_it_will_load_enabled_cryptocurrency(array $enabled_cryptocurrency): void
    {
        CryptocurrencyCollection::$crypto_enabled = $enabled_cryptocurrency;
        $this->assertSame($enabled_cryptocurrency, CryptocurrencyCollection::$crypto_enabled);
        $this->assertNotEmpty($enabled_cryptocurrency);
    }

    /**
     * @depends test_it_will_load_enabled_cryptocurrency
     */
    public function test_it_can_return_enabled_bitcoin_cryptocurrency(): void
    {
        $bitcoin = new Cryptocurrency('Bitcoin');
        $this->assertThat(
            $bitcoin,
            $this->isInstanceOf(
                // In PHP 7.3 we can use array_key_first() instead of array_keys()[0]
                array_keys(
                    class_parents(Bitcoin::class)
                )[0]
            )
        );
    }

    /**
     * @depends test_it_will_load_enabled_cryptocurrency
     */
    public function test_it_can_return_enabled_ethereum_cryptocurrency(): void
    {
        $ethereum = new Cryptocurrency('Ethereum');
        $this->assertThat(
            $ethereum,
            $this->isInstanceOf(
            // In PHP 7.3 we can use array_key_first() instead of array_keys()[0]
            array_keys(
                    class_parents(Ethereum::class)
                )[0]
            )
        );
    }

    /**
     * @depends test_it_will_load_enabled_cryptocurrency
     */
    public function test_it_can_return_enabled_ripple_cryptocurrency(): void
    {
        $ripple = new Cryptocurrency('Ripple');
        $this->assertThat(
            $ripple,
            $this->isInstanceOf(
            // In PHP 7.3 we can use array_key_first() instead of array_keys()[0]
            array_keys(
                    class_parents(Ripple::class)
                )[0]
            )
        );
    }

    /**
     * @depends test_it_will_load_enabled_cryptocurrency
     * @dataProvider not_existent_cryptocurrency
     */
    public function test_it_will_throw_an_exception_when_try_to_get_a_not_existent_cryptocurrency(string $not_existent_cryptocurrency): void
    {
        $this->expectException(CryptoNotFoundException::class);
        (new Cryptocurrency())->load($not_existent_cryptocurrency);
    }

    public function not_existent_cryptocurrency(): array
    {
        $not_existent_cryptocurrency = [
            ['AAA'],
            ['BBB'],
            ['CCC'],
        ];

        return $not_existent_cryptocurrency;
    }

    /**
     * @depends test_it_will_load_enabled_cryptocurrency
     * @dataProvider not_enabled_cryptocurrency
     */
    public function test_it_will_throw_an_exception_when_try_to_get_a_not_enabled_cryptocurrency(string $not_enabled_cryptocurrency): void
    {
        $this->expectException(CryptoNotEnabledException::class);
        (new Cryptocurrency())->load($not_enabled_cryptocurrency);
    }

    public function not_enabled_cryptocurrency(): array
    {
        $not_enabled_cryptocurrency = [
            ['STASISEURS'],
            ['WaykiChain'],
            ['Zilliqa'],
        ];

        return $not_enabled_cryptocurrency;
    }
}
