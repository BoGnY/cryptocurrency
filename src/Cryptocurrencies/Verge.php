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
 * Class Verge.
 */
class Verge extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 693;
        $this->name = 'Verge';
        $this->symbol = 'XVG';
        $this->type = 'coin';
        $this->mineable = true;
        $this->description = 'Created in 2014 under its original name of DogecoinDark, Verge is an open-source privacy coin with a team of international developers. Verge uses the anonymity tool Tor and an anonymous network layer I2P to hide specific transactions’ IP addresses and locations. Transaction speed on Verge is estimated to be at 5 seconds due to the use of Simple Payment Verification (SPV). The Core QT wallet has built-in TOR integration and SSL encryption which obfuscates the IP addresses of users. The introduction of the Wraith Protocol upgrade enables users to send and receive payments privately across the Verge blockchain by enabling stealth addressing services. Verge users are reportedly able to switch between private and public ledgers on the Verge blockchain. Verge offers five different Proof-of-Work algorithms for mining - Lyra2rev2, Scrypt, X17, blake2s and myr-groestl.';
        $this->website = [
            'http://vergecurrency.com',
        ];
        $this->explorer = [
            'https://verge-blockchain.info/ext/getaddress/%s',
        ];
        $this->source_code = [
            'https://github.com/vergecurrency',
        ];

        return $this;
    }
}
