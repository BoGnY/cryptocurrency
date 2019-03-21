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
 * Class Cardano.
 */
class Cardano extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 2010;
        $this->name = 'Cardano';
        $this->symbol = 'ADA';
        $this->type = 'coin';
        $this->mineable = true;
        $this->description = 'Cardano is a decentralized platform that will allow complex programmable transfers of value in a secure and scalable fashion. It is one of the first blockchains to be built in the Haskell programming language. Cardano is developing a smart contract platform which seeks to deliver more advanced features than any protocol previously developed. It is the first blockchain platform to evolve out of a scientific philosophy and a research-first driven approach. The development team consists of a large global collective of expert engineers and researchers. The protocol features a layered blockchain software stack that is flexible, scalable, and is being developed with the most rigorous academic and commercial software standards in the industry. Cardano will use a democratic governance system that allows the project to evolve over time, and fund itself sustainably through a visionary treasury system.';
        $this->website = [
            'https://www.cardano.org',
        ];
        $this->explorer = [
            'https://cardanoexplorer.com',
        ];
        $this->source_code = [
            'https://github.com/input-output-hk/cardano-sl',
        ];

        return $this;
    }
}
