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
 * Class Zcash.
 */
class Zcash extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        parent::$mineable = true;
        parent::$description = 'Launched in 2016 by Zooko Wilcox-O\'Hearn and based on the Zerocoin protocol, Zcash is a decentralized and open - source privacy - focused cryptocurrency that enables selective transparency of transactions . Zcash transactions can either be transparent or shielded through a zero - knowledge proof called zk - SNARKs. This allows the network to maintain a secure ledger of balances without disclosing the parties or amounts involved. Instead of publishing spend - authority and transaction values, the transaction metadata is encrypted and zk - SNARKs are used to prove that nobody is being dishonest.';
        parent::$website = [
        $this->id = 1437;
        $this->name = 'Zcash';
        $this->symbol = 'ZEC';
        $this->type = 'coin';
        $this->mineable = true;
        $this->algorithm = [
            'EquiHash',
        ];
        $this->description = 'Launched in 2016 by Zooko Wilcox-O\'Hearn and based on the Zerocoin protocol, Zcash is a decentralized and open - source privacy - focused cryptocurrency that enables selective transparency of transactions . Zcash transactions can either be transparent or shielded through a zero - knowledge proof called zk - SNARKs. This allows the network to maintain a secure ledger of balances without disclosing the parties or amounts involved. Instead of publishing spend - authority and transaction values, the transaction metadata is encrypted and zk - SNARKs are used to prove that nobody is being dishonest.';
        $this->website = [
            'https://z.cash',
        ];
        $this->explorer = [
            'https://api.zcha.in/v2/mainnet/accounts/%s',
            'https://zcash.tokenview.com',
        ];
        $this->source_code = [
            'https://github.com/zcash/zcash',
        ];

        return $this;
    }
}
