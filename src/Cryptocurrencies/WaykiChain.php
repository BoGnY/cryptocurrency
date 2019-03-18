<?php

declare(strict_types=1);

namespace CryptoTech\Cryptocurrency;

class WaykiChain extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2346;
        parent::$name = 'WaykiChain';
        parent::$symbol = 'WICC';
        parent::$type = 'coin';
        parent::$mineable = false;
        parent::$description = 'WaykiChain, a technology innovation company focusing on underlying blockchain technology research and development and related operations, owns leading public chain for commercial applications in the industry. WaykiChain is a Turing complete smart contract platform adopting DPoS consensus mechanism.';
        parent::$website = [
            'https://waykichain.com',
        ];
        parent::$explorer = [
            'https://www.waykiscan.com',
        ];
        parent::$source_code = [
            '',
        ];
    }
}
