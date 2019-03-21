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
 * Interface CryptocurrencyInterface.
 */
interface CryptocurrencyInterface
{
    /**
     * Get cryptocurrency id.
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Get cryptocurrency name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get cryptocurrency symbol.
     *
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Get cryptocurrency type.
     * Can be 'coin' or 'token'.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Get cryptocurrency logo.
     *
     * @param int|string $size
     * The size of logo, which can be '16', '32', '64', '128' or '200'.
     * @param string $path
     * The path of logo.
     * The path must be the sub-path that allows you to get the correct logo path,
     * depending on whether you want to load the logo locally, rather than on a website,
     * or use it with some plugin (Laravel, Symfony, etc).
     * Sub-path must be point to the parent directory of crypto-logo directory.
     *
     * @return string
     */
    public function getLogo($size, $path): string;

    /**
     * Get cryptocurrency mineable state.
     * Is returned 'coin' or 'token'.
     *
     * @return bool
     */
    public function isMineable(): bool;

    /**
     * Set cryptocurrency description.
     *
     * @param string $description
     */
    public function setDescription($description);

    /**
     * Get cryptocurrency description.
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Set cryptocurrency official project url.
     *
     * @param array $url
     */
    public function setProjectUrl($url);

    /**
     * Get cryptocurrency official project url.
     *
     * @return array
     */
    public function getProjectUrl(): array;

    /**
     * Set cryptocurrency explorer urls.
     *
     * @param array $url
     */
    public function setExplorerUrl($url);

    /**
     * Get cryptocurrency explorer urls.
     *
     * @return array
     */
    public function getExplorerUrl(): array;

    /**
     * Set cryptocurrency sourcecode url.
     *
     * @param array $url
     */
    public function setSourceCodeUrl($url);

    /**
     * Get cryptocurrency sourcecode url.
     *
     * @return array
     */
    public function getSourceCodeUrl(): array;

    /**
     * Method overridable by single cryptocurrency class which contains
     * all informations about the crypto.
     *
     * @return mixed
     */
    public function build();
}
