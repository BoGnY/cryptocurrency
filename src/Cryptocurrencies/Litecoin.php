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

/**
 * Class Litecoin.
 */
class Litecoin extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 2;
        $this->name = 'Litecoin';
        $this->symbol = 'LTC';
        $this->type = 'coin';
        $this->mineable = true;
        $this->description = 'Litecoin is a peer-to-peer cryptocurrency created by Charlie Lee. It was created based on the Bitcoin protocol but differs in terms of the hashing algorithm used. Litecoin uses the memory intensive Scrypt proof of work mining algorithm. Scrypt allows consumer-grade hardware such as GPU to mine those coins.';
        $this->website = [
            'https://litecoin.org',
        ];
        $this->explorer = [
            'https://chain.so/api/v2/get_address_balance/LTC/%s',
            'https://blockchair.com/litecoin',
            'https://chainz.cryptoid.info/ltc',
            'http://explorer.litecoin.net/chain/Litecoin',
        ];
        $this->source_code = [
            'https://github.com/litecoin-project/litecoin',
        ];

        return $this;
    }
}
