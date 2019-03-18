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

class STASISEURS extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2989;
        parent::$name = 'STASIS EURS';
        parent::$symbol = 'EURS';
        parent::$type = 'token';
        parent::$mineable = false;
        parent::$description = 'STASIS provides a full-service tokenization platform, including token creation/redemption, third-party audits, custodial services, and deep expertise in current regulatory environment. Tokenized assets are always backed 1:1 by collateral held in reserve accounts. The EURS stablecoin combines the benefits of blockchain technology with the reputation and relative stability of the euro.';
        parent::$website = [
            'https://stasis.net',
        ];
        parent::$explorer = [
            'https://etherscan.io/token/0xdb25f211ab05b1c97d595516f45794528a807ad8',
            'https://ethplorer.io/address/0xdb25f211ab05b1c97d595516f45794528a807ad8',
        ];
        parent::$source_code = [
            'https://github.com/STASISNET',
        ];
    }
}
