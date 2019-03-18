<?php

declare(strict_types=1);

namespace CryptoTech\Cryptocurrency;

class Zilliqa extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2469;
        parent::$name = 'Zilliqa';
        parent::$symbol = 'ZIL';
        parent::$type = 'token';
        parent::$mineable = false;
        parent::$algorithm = Algorithm::PoW;
        parent::$description = 'Zilliqa is a scalable, secure public blockchain platform. It\'s the first public blockchain platform that implemented sharding and achieved a throughput of 2828 transactions per second in its test net. This enables new use cases that have high-throughput demands that were not previously possible on legacy public blockchain platforms.';
        parent::$website = [
            'https://zilliqa.com',
        ];
        parent::$explorer = [
            'https://etherscan.io/token/0x05f4a42e251f2d52b8ed15e9fedaacfcef1fad27',
            'https://ethplorer.io/address/0x05f4a42e251f2d52b8ed15e9fedaacfcef1fad27',
        ];
        parent::$source_code = [
            'https://github.com/Zilliqa/Zilliqa',
        ];
    }
}
