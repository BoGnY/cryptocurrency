<?php

declare(strict_types=1);

namespace CryptoTech\Cryptocurrency;

class Bitcoin extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 1;
        parent::$name = 'Bitcoin';
        parent::$symbol = 'BTC';
        parent::$type = 'coin';
        parent::$mineable = true;
        parent::$description = 'Bitcoin description.';
        parent::$website = [
            'https://bitcoin.org/'
        ];
        parent::$explorer = [
            'https://blockchain.info/',
            'https://live.blockcypher.com/btc/',
            'https://blockchair.com/bitcoin'
        ];
        parent::$source_code = [
            'https://github.com/bitcoin/'
        ];
    }
}
