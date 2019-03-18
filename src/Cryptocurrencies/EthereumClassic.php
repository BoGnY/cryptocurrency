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

class EthereumClassic extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 1321;
        parent::$name = 'Ethereum Classic';
        parent::$symbol = 'ETC';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'After a loophole was exploited by a hacker on 17th June 2016, resulting in millions of stolen Ether, Ethereum forked to a new chain that aimed to remedy the damages from the hack. Ethereum Classic is the continuation of the original Ethereum blockchain - the classic version.';
        parent::$website = [
            'https://ethereumclassic.org',
        ];
        parent::$explorer = [
            'https://api.gastracker.io/addr/%s',
            'http://etherhub.io/',
            'https://blockscout.com/etc/mainnet',
        ];
        parent::$source_code = [
            'https://github.com/ethereumclassic',
        ];
    }
}
