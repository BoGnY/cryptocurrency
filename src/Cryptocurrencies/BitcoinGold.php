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

class BitcoinGold extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2083;
        parent::$name = 'Bitcoin Gold';
        parent::$symbol = 'BTG';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Bitcoin Gold is a fork of Bitcoin that occurred on 24 October 2017 on block 419406. Bitcoin Gold changed Bitcoin’s proof-of-work algorithm from SHA256 to Equihash rendering specialised mining equipment obsolete in an attempt to democratise the Bitcoin mining process.';
        parent::$website = [
            'https://bitcoingold.org',
        ];
        parent::$explorer = [
            'https://explorer.bitcoingold.org/insight',
            'https://btg.tokenview.com',
            'https://btgexplorer.com/api/addr/%s/?noTxList=1',
        ];
        parent::$source_code = [
            'https://github.com/BTCGPU/BTCGPU',
        ];
    }
}
