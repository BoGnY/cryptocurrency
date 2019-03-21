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
 * Class Ethereum.
 */
class Ethereum extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 1027;
        $this->name = 'Ethereum';
        $this->symbol = 'ETH';
        $this->type = 'coin';
        $this->mineable = true;
        $this->description = 'Ethereum is an open-source, public, blockchain-based distributed computing platform featuring smart contract (scripting) functionality. It provides a decentralized Turing-complete virtual machine, the Ethereum Virtual Machine (EVM), which can execute scripts using an international network of public nodes. Ethereum also provides a cryptocurrency token called "Ether", which can be transferred between accounts and used to compensate participant nodes for computations performed. "Gas", an internal transaction pricing mechanism, is used to mitigate spam and allocate resources on the network.';
        $this->website = [
            'https://www.ethereum.org',
        ];
        $this->explorer = [
            'https://etherscan.io',
            'https://ethplorer.io/address/%s',
            'https://blockchair.com/ethereum',
        ];
        $this->source_code = [
            'https://github.com/ethereum',
        ];

        return $this;
    }
}
