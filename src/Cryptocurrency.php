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
    public static $id = 0;

    /**
     * Cryptocurrency name.
     *
     * @var string
     */
    public static $name = '';

    /**
     * Cryptocurrency symbol.
     *
     * @var string
     */
    public static $symbol = '';

    /**
     * Cryptocurrency type.
     *
     * @var string
     */
    public static $type = '';

    /**
     * Cryptocurrency logo.
     *
     * @var string
     */
    public static $logo = '';

    /**
     * Cryptocurrency mineable.
     *
     * @var bool
     */
    public static $mineable = false;

    /**
     * Cryptocurrency description.
     *
     * @var string
     */
    public static $description = '';

    /**
     * Cryptocurrency website url.
     *
     * @var array
     */
    public static $website = [];

    /**
     * Cryptocurrency explorer urls.
     *
     * @var array
     */
    public static $explorer = [];

    /**
     * Cryptocurrency sourcecode url.
     *
     * @var array
     */
    public static $source_code = [];

    /**
     * {@inheritdoc}
     */
    public function getId(): int
    {
        return self::$id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return self::$name;
    }

    /**
     * {@inheritdoc}
     */
    public function getSymbol(): string
    {
        return self::$symbol;
    }

    /**
     * {@inheritdoc}
     */
    public function getType(): string
    {
        return self::$type;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogo($size, $path): string
    {
        return $path.'crypto-logo'.DIRECTORY_SEPARATOR.(string) $size.'px'.DIRECTORY_SEPARATOR.self::$id.'.png';
    }

    /**
     * {@inheritdoc}
     */
    public function isMineable(): bool
    {
        return self::$mineable;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        self::$description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return self::$description;
    }

    /**
     * {@inheritdoc}
     */
    public function setProjectUrl($website)
    {
        self::$website = $website;
    }

    /**
     * {@inheritdoc}
     */
    public function getProjectUrl(): array
    {
        return self::$website;
    }

    /**
     * {@inheritdoc}
     */
    public function setExplorerUrl($explorer)
    {
        self::$explorer = $explorer;
    }

    /**
     * {@inheritdoc}
     */
    public function getExplorerUrl(): array
    {
        return self::$explorer;
    }

    /**
     * {@inheritdoc}
     */
    public function setSourceCodeUrl($source_code)
    {
        self::$source_code = $source_code;
    }

    /**
     * {@inheritdoc}
     */
    public function getSourceCodeUrl(): array
    {
        return self::$source_code;
    }

    /**
     * {@inheritdoc}
     */
    public static function build()
    {
    }

    /**
     * Cryptocurrency constructor.
     *
     * @param string $name
     * Must be the class name of the selected cryptocurrency.
     *
     * @throws \CryptoTech\Cryptocurrency\Exception\CryptoNotFoundException
     * @throws \CryptoTech\Cryptocurrency\Exception\CryptoNotEnabledException
     */
    public function __construct(string $name)
    {
        if ( ! in_array($name, CryptocurrencyCollection::$crypto_enabled, false)) {
            $class_name = '\\CryptoTech\\Cryptocurrency\\'.$name;
            if ( ! class_exists($class_name)) {
                /* @noinspection PhpUnhandledExceptionInspection */
                throw new CryptoNotFoundException(sprintf('Cryptocurrency class "%s" not found! This cryptocurrency is not implemented yet.', $class_name));
            }

            /* @noinspection PhpUnhandledExceptionInspection */
            throw new CryptoNotEnabledException(sprintf('The cryptocurrency ("%s") you have selected is not enabled in your configuration!', $name));
        }

        return call_user_func('\\CryptoTech\\Cryptocurrency\\'.$name.'::build');
    }
}
