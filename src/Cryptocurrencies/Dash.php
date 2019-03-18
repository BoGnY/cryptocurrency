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

class Dash extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 131;
        parent::$name = 'Dash';
        parent::$symbol = 'DASH';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Dash, formerly known as Darkcoin until 26th March 2015, is a privacy-centric digital currency with instant transactions. Similar to cash, Dash allows you to remain anonymous while transacting. Dash protects privacy by anonymizing transactions that are made over the network using a technology developed by the Dash team called DarkSend. DarkSend is inspired by the CoinJoin project that was birthed to anonymize Bitcoin transactions. Using Dash, payments are private and cannot be tracked along with balances. Dash harnesses the power of its Masternode network to power an innovative technology called InstantX. When sending funds, users can use InstantX and transactions will be fully sent and irreversible within four seconds. Dash was released on the 18th January 2014 with zero premine coins. It uses 11 rounds of hashing algorithm namely blake, bmw, groestl, jh, keccak, skein, luffa, cubehash, shavite, simd, and echo. As of the current design, there will only be 22 million Dash ever created, making it a deflationary currency.';
        parent::$website = [
            'https://www.dash.org',
        ];
        parent::$explorer = [
            'https://chain.so/api/v2/get_address_balance/DASH/%s',
            'https://explorer.dash.org',
            'https://insight.dash.org/insight',
            'https://chainz.cryptoid.info/dash',
        ];
        parent::$source_code = [
            'https://github.com/dashpay/dash',
        ];
    }
}
