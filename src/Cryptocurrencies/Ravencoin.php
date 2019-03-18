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

class Ravencoin extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2577;
        parent::$name = 'Ravencoin';
        parent::$symbol = 'RVN';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Ravencoin is an open-source blockchain project that specializes in the creation and peer-to-peer transfer of assets. Ravencoin enables users to create and trade any real-world (e.g. commodities) or digital (e.g. virtual goods) assets on a network. The core developers launched Ravencoin on 3rd January 2018. The project has some prominent backers: Bruce Fenton, Board Member of The Bitcoin Foundation, advises the team while Overstock has made a multi-million dollar investment into the project.';
        parent::$website = [
            'https://ravencoin.org',
        ];
        parent::$explorer = [
            'https://ravencoin.network/api/addr/%s/?noTxList=1',
        ];
        parent::$source_code = [
            'https://github.com/RavenProject/Ravencoin',
        ];
    }
}
