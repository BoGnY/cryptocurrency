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

use CryptoTech\Cryptocurrency\Exception\CryptoNotEnabledException;
use CryptoTech\Cryptocurrency\Exception\CryptoNotFoundException;

class Cryptocurrency implements CryptocurrencyInterface
{
    /**
     * Cryptocurrency CoinMarketCap id.
     *
     * @var int
     */
    protected $id = 0;

    /**
     * Cryptocurrency name.
     *
     * @var string
     */
    protected $name = '';

    /**
     * Cryptocurrency symbol.
     *
     * @var string
     */
    protected $symbol = '';

    /**
     * Cryptocurrency type.
     *
     * @var string
     */
    protected $type = '';

    /**
     * Cryptocurrency logo.
     *
     * @var string
     */
    protected $logo = '';

    /**
     * Cryptocurrency mineable.
     *
     * @var bool
     */
    protected $mineable = false;

    /**
     * Cryptocurrency description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Cryptocurrency website url.
     *
     * @var array
     */
    protected $website = [];

    /**
     * Cryptocurrency explorer urls.
     *
     * @var array
     */
    protected $explorer = [];

    /**
     * Cryptocurrency sourcecode url.
     *
     * @var array
     */
    protected $source_code = [];

    /**
     * {@inheritdoc}
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogo($size, $path): string
    {
        return $path.'crypto-logo'.DIRECTORY_SEPARATOR.(string) $size.'px'.DIRECTORY_SEPARATOR.$this->id.'.png';
    }

    /**
     * {@inheritdoc}
     */
    public function isMineable(): bool
    {
        return $this->mineable;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setProjectUrl($website)
    {
        $this->website = $website;
    }

    /**
     * {@inheritdoc}
     */
    public function getProjectUrl(): array
    {
        return $this->website;
    }

    /**
     * {@inheritdoc}
     */
    public function setExplorerUrl($explorer)
    {
        $this->explorer = $explorer;
    }

    /**
     * {@inheritdoc}
     */
    public function getExplorerUrl(): array
    {
        return $this->explorer;
    }

    /**
     * {@inheritdoc}
     */
    public function setSourceCodeUrl($source_code)
    {
        $this->source_code = $source_code;
    }

    /**
     * {@inheritdoc}
     */
    public function getSourceCodeUrl(): array
    {
        return $this->source_code;
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
    }

    /**
     * Cryptocurrency loader.
     *
     * @param string $name
     * Must be the class name of the selected cryptocurrency.
     *
     * @throws \CryptoTech\Cryptocurrency\Exception\CryptoNotFoundException
     * @throws \CryptoTech\Cryptocurrency\Exception\CryptoNotEnabledException
     *
     * @return \CryptoTech\Cryptocurrency\Cryptocurrency
     */
    public function load(string $name): Cryptocurrency
    {
        $class_name = '\\CryptoTech\\Cryptocurrency\\'.$name;
        if ( ! in_array($name, CryptocurrencyCollection::$crypto_enabled, false)) {
            if ( ! class_exists($class_name)) {
                /* @noinspection PhpUnhandledExceptionInspection */
                throw new CryptoNotFoundException(sprintf('Cryptocurrency class "%s" not found! This cryptocurrency is not implemented yet.', $class_name));
            }

            /* @noinspection PhpUnhandledExceptionInspection */
            throw new CryptoNotEnabledException(sprintf('The cryptocurrency ("%s") you have selected is not enabled in your configuration!', $name));
        }

        return call_user_func([new $class_name($name), 'build']);
    }
}
