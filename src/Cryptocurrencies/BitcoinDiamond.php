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

class BitcoinDiamond extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2222;
        parent::$name = 'Bitcoin Diamond';
        parent::$symbol = 'BCD';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Bitcoin Diamond is a hard fork of Bitcoin. The fork occurring at at block height 495866, implemented changes including a new proof of work algorithm to deter attacks on the network and segregation of transaction signatures from transactions on the chain for additional capacity allowing a greater number of transactions per second on the network as a whole.';
        parent::$website = [
            'http://btcd.io/',
        ];
        parent::$explorer = [
            'http://20.184.13.116/v2/addr/%s',
            'http://explorer.btcd.io/',
        ];
        parent::$source_code = [
            'https://github.com/eveybcd/BitcoinDiamond',
        ];
    }
}
