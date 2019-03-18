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
        parent::$description = 'Bitcoin is a worldwide cryptocurrency and digital payment system, called the first decentralized digital currency, since the system works without a central repository or single administrator. It was invented by an unknown programmer, or a group of programmers, under the name Satoshi Nakamoto and released as open-source software in 2009. The system is peer-to-peer, and transactions take place between users directly, without an intermediary. These transactions are verified by network nodes and recorded in a public distributed ledger called a blockchain.';
        parent::$website = [
            'https://bitcoin.org',
        ];
        parent::$explorer = [
            'https://chain.so/api/v2/get_address_balance/BTC/%s',
            'https://blockchain.info',
            'https://live.blockcypher.com/btc',
            'https://blockchair.com/bitcoin',
        ];
        parent::$source_code = [
            'https://github.com/bitcoin',
        ];
    }
}
