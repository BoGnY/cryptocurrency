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
 * Class BitcoinCash.
 */
class BitcoinCash extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 1831;
        $this->name = 'Bitcoin Cash';
        $this->symbol = 'BCH';
        $this->type = 'coin';
        $this->mineable = true;
        $this->description = 'Bitcoin Cash (ABC) is hard fork (a community-activated update to the protocol or code) of Bitcoin that took effect on 1st August 2017 that increased the block size to 8MB, to help the scale the underlying technology of Bitcoin. In 16th November 2018 Bitcoin Cash was hard forked again and split into Bitcoin SV and Bitcoin ABC. Bitcoin ABC became the dominant chain and took over the BCH ticker as it had more hashpower and majority of the nodes in the network.';
        $this->website = [
            'https://www.bitcoincash.org',
        ];
        $this->explorer = [
            'https://www.blocktrail.com/BCC/json/blockchain/address/%s',
            'https://blockchair.com/bitcoin-cash',
            'https://bch.tokenview.com/en',
            'http://blockdozer.com/insight',
        ];
        $this->source_code = [
            'https://github.com/bitcoincashorg',
        ];

        return $this;
    }
}
