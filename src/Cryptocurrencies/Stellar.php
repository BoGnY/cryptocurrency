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
 * Class Stellar.
 */
class Stellar extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 512;
        $this->name = 'Stellar';
        $this->symbol = 'XLM';
        $this->type = 'coin';
        $this->mineable = false;
        $this->description = 'The Stellar network is an open source, distributed, and community owned network used to facilitate cross-asset transfers of value. Stellar aims to help facilitate cross-asset transfer of value at a fraction of a penny while aiming to be an open financial system that gives people of all income levels access to low-cost financial services. Stellar can handle exchanges between fiat-based currencies and between cryptocurrencies. Stellar.org, the organization that supports Stellar, is centralized like XRP and meant to handle cross platform transactions and micro transactions like XRP. However, unlike Ripple, Stellar.org is non-profit and their platform itself is open source and decentralized. Through the use of its intermediary currency Lumens (XLM), a user can send any currency that they own to anyone else in a different currency. Stellar was founded by Jed McCaleb in 2014. Jed McCaleb is also the founder of Mt. Gox and co-founder of Ripple, launched the network system Stellar with former lawyer Joyce Kim. Stellar is also a payment technology that aims to connect financial institutions and drastically reduce the cost and time required for cross-border transfers. In fact, both payment networks used the same protocol initially.';
        $this->website = [
            'https://www.stellar.org',
        ];
        $this->explorer = [
            'https://dashboard.stellar.org',
            'https://stellar.expert/explorer/public',
            'https://steexp.com',
        ];
        $this->source_code = [
            'https://github.com/stellar',
        ];

        return $this;
    }
}
