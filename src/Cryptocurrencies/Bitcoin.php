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

class Bitcoin extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 1;
        parent::$name = 'Bitcoin';
        parent::$symbol = 'BTC';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Bitcoin is a worldwide cryptocurrency and digital payment system, called the first decentralized digital currency, since the system works without a central repository or single administrator. It was invented by an unknown programmer, or a group of programmers, under the name Satoshi Nakamoto and released as open-source software in 2009. The system is peer-to-peer, and transactions take place between users directly, without an intermediary. These transactions are verified by network nodes and recorded in a public distributed ledger called a blockchain.';
        parent::$website = [
            'https://bitcoin.org',
        ];
        parent::$explorer = [
            'https://chain.so/api/v2/get_address_balance/BTC/%s',
            'https://blockchain.info',
            'https://live.blockcypher.com/btc',
            'https://blockchair.com/bitcoin',
        ];
        parent::$source_code = [
            'https://github.com/bitcoin',
        ];
    }
}
