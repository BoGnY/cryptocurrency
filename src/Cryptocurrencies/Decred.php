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

class Decred extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 1168;
        parent::$name = 'Decred';
        parent::$symbol = 'DCR';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Decred is an open-source, Bitcoin fork that places emphasis on development funding, on-chain governance, and consensus mechanisms.Launched in February 2016 by the Bitcoin developers behind btcsuite (an alternative full-node Bitcoin implementation written in Go (golang)), Decred successfully orchestrated an on-chain user-activated consensus vote, which is emblematic of the project\'s emphasis on community - driven stakeholder governance. Other features of the project include a hybrid proof of work (PoW) - proof of stake(PoS) consensus voting system, a public proposal platform, smart contracts, cross-chain atomic swaps, and cross-platform wallets.';
        parent::$website = [
            'https://www.decred.org',
        ];
        parent::$explorer = [
            'https://mainnet.decred.org/api/addr/%s/?noTxList=1',
            'https://explorer.dcrdata.org',
            'https://stats.decred.org',
        ];
        parent::$source_code = [
            'https://github.com/decred',
        ];
    }
}
