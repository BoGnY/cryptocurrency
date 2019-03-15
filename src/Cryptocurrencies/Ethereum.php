<?php

declare(strict_types=1);

namespace CryptoTech\Cryptocurrency;

class Ethereum extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 1027;
        parent::$name = 'Ethereum';
        parent::$symbol = 'ETH';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Ethereum description.';
        parent::$website = [
            'https://www.ethereum.org/'
        ];
        parent::$explorer = [
            'https://etherscan.io/',
            'https://ethplorer.io/',
            'https://blockchair.com/ethereum'
        ];
        parent::$source_code = [
            'https://github.com/ethereum'
        ];
    }
}
