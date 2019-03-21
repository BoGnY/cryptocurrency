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
 * Class EOS.
 */
class EOS extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 1765;
        $this->name = 'EOS';
        $this->symbol = 'EOS';
        $this->type = 'coin';
        $this->mineable = false;
        $this->description = 'EOS.IO is a blockchain protocol powered by the native cryptocurrency EOS. The protocol emulates most of the attributes of a real computer including hardware (CPU(s) & GPU(s) for processing, local/RAM memory, hard-disk storage) with the computing resources distributed equally among EOS cryptocurrency holders. EOSIO operates as a smart contract platform and decentralized operating system intended for the deployment of industrial-scale decentralized applications through a decentralized autonomous corporation model. The smart contract platform claims to eliminate transaction fees and also conduct millions of transactions per second. EOS (EOS) is software that introduces a blockchain architecture designed to enable vertical and horizontal scaling of decentralized applications. The EOS software provides accounts, authentication, databases, asynchronous communication and the scheduling of applications across multiple CPU cores and/or clusters.';
        $this->website = [
            'https://eos.io',
        ];
        $this->explorer = [
            'https://bloks.io',
            'https://eosflare.io',
            'https://api.eospark.com/api?module=account&action=get_account_balance&apikey=a9564ebc3289b7a14551baf8ad5ec60a&account=%s',
        ];
        $this->source_code = [
            'https://github.com/eosio',
        ];

        return $this;
    }
}
