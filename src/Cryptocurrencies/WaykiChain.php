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

class WaykiChain extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2346;
        parent::$name = 'WaykiChain';
        parent::$symbol = 'WICC';
        parent::$type = 'coin';
        parent::$mineable = false;
        parent::$description = 'WaykiChain, a technology innovation company focusing on underlying blockchain technology research and development and related operations, owns leading public chain for commercial applications in the industry. WaykiChain is a Turing complete smart contract platform adopting DPoS consensus mechanism.';
        parent::$website = [
            'https://waykichain.com',
        ];
        parent::$explorer = [
            'https://www.waykiscan.com',
        ];
        parent::$source_code = [
            '',
        ];
    }
}
