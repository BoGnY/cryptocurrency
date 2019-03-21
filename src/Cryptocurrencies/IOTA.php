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
 * Class IOTA.
 */
class IOTA extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 1720;
        $this->name = 'IOTA';
        $this->symbol = 'MIOTA';
        $this->type = 'coin';
        $this->mineable = false;
        $this->description = 'IOTA is a distributed ledger for the Internet of Things that uses a directed acyclic graph (DAG) instead of a conventional blockchain. Its quantum-proof protocol, Tangle, reportedly brings benefits like zero fees, infinite scalability, fast transactions, and secure data transfer. The IOTA Tangle is a Directed Acyclic Graph which has no fees on transactions and no fixed limit on how many transactions can be confirmed per second in the network; instead, the throughput grows in conjunction with activity in the network; i.e., the more activity, the faster the network.';
        $this->website = [
            'https://www.iota.org',
        ];
        $this->explorer = [
            'https://thetangle.org',
            'https://iotasear.ch',
        ];
        $this->source_code = [
            'https://github.com/iotaledger',
        ];

        return $this;
    }
}
