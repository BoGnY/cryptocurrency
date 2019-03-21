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
 * Class TRON.
 */
class TRON extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        parent::$mineable = true;
        parent::$description = 'TRON strives to build the future of a truly decentralized internet and global free content entertainment system that utilizes blockchain technology. The TRON Protocol represents the architecture of an operating system based on the blockchain which could enable developers to create smart contracts and decentralized applications, freely publish, own, and store data and other content. According to the TRON Foundation, the ecosystem surrounding this network specializes in offering massive scalability and consistent reliability capable of processing transactions at a high rate via high-throughput computing.';
        parent::$website = [
        $this->id = 1958;
        $this->name = 'TRON';
        $this->symbol = 'TRX';
        $this->type = 'coin';
        $this->mineable = true;
        $this->algorithm = [
            'DPoS',
        ];
        $this->description = 'TRON strives to build the future of a truly decentralized internet and global free content entertainment system that utilizes blockchain technology. The TRON Protocol represents the architecture of an operating system based on the blockchain which could enable developers to create smart contracts and decentralized applications, freely publish, own, and store data and other content. According to the TRON Foundation, the ecosystem surrounding this network specializes in offering massive scalability and consistent reliability capable of processing transactions at a high rate via high-throughput computing.';
        $this->website = [
            'https://tron.network',
        ];
        $this->explorer = [
            'https://apilist.tronscan.org/api/account?address=%s',
            'https://www.trxplorer.io',
        ];
        $this->source_code = [
            'https://github.com/tronprotocol',
        ];

        return $this;
    }
}
