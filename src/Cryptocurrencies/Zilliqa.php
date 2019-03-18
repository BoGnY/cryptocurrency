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

class Zilliqa extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2469;
        parent::$name = 'Zilliqa';
        parent::$symbol = 'ZIL';
        parent::$type = 'token';
        parent::$mineable = false;
        parent::$description = 'Zilliqa is a scalable, secure public blockchain platform. It\'s the first public blockchain platform that implemented sharding and achieved a throughput of 2828 transactions per second in its test net. This enables new use cases that have high-throughput demands that were not previously possible on legacy public blockchain platforms.';
        parent::$website = [
            'https://zilliqa.com',
        ];
        parent::$explorer = [
            'https://etherscan.io/token/0x05f4a42e251f2d52b8ed15e9fedaacfcef1fad27',
            'https://ethplorer.io/address/0x05f4a42e251f2d52b8ed15e9fedaacfcef1fad27',
        ];
        parent::$source_code = [
            'https://github.com/Zilliqa/Zilliqa',
        ];
    }
}
