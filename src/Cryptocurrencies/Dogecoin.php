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
 * Class Dogecoin.
 */
class Dogecoin extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 74;
        $this->name = 'Dogecoin';
        $this->symbol = 'DOGE';
        $this->type = 'coin';
        $this->mineable = true;
        $this->description = 'Based on the the popular "Doge" Internet meme and featuring a Shiba Inu on its logo, Dogecoin (DOGE) is a cryptocurrency that was forked from Litecoin in December 2013. Dogecoin has been used primarily as a tipping system on Reddit and Twitter to reward the creation or sharing of quality content. Dogecoin was created by Billy Markus from Portland, Oregon and Jackson Palmer from Sydney, Australia. Both had envisaged Dogecoin as a fun, light-hearted cryptocurrency that would have greater appeal beyond the core Bitcoin audience.';
        $this->website = [
            'http://dogecoin.com',
        ];
        $this->explorer = [
            'https://chain.so/api/v2/get_address_balance/DOGE/%s',
            'https://blockchair.com/dogecoin',
            'http://dogechain.info/chain/Dogecoin',
        ];
        $this->source_code = [
            'https://github.com/dogecoin/dogecoin',
        ];

        return $this;
    }
}
