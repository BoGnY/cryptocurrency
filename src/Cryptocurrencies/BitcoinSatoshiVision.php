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

class BitcoinSatoshiVision extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 3602;
        parent::$name = 'Bitcoin Satoshi Vision';
        parent::$symbol = 'BSV';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'In 16th November 2018 Bitcoin Cash was hard forked again and split into Bitcoin Satoshi Vision (BSV) and Bitcoin Cash (ABC).';
        parent::$website = [
            'https://bitcoinsv.io',
        ];
        parent::$explorer = [
            'https://blockchair.com/bitcoin-sv/dashboards/address/%s',
            'https://svblox.com',
            'https://bchsv.tokenview.com/en',
        ];
        parent::$source_code = [
            'https://github.com/bitcoin-sv/bitcoin-sv',
        ];
    }
}
