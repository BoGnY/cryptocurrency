<?php

declare(strict_types=1);

namespace CryptoTech\Cryptocurrency;

class Ripple extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 52;
        parent::$name = 'Ripple';
        parent::$symbol = 'XRP';
        parent::$type = 'coin';
        parent::$mineable = false;
        parent::$description = 'Ripple is an independent digital asset that is native to the Ripple Consensus Ledger. With proven governance and the fastest transaction confirmation of its kind, XRP is said to be the most efficient settlement option for financial institutions and liquidity providers seeking global reach, accessibility and fast settlement finality for interbank flows.';
        parent::$website = [
            'https://ripple.com/xrp',
        ];
        parent::$explorer = [
            'https://xrpcharts.ripple.com/#/graph',
            'https://bithomp.com/explorer'
        ];
        parent::$source_code = [
            'https://github.com/ripple',
        ];
    }
}
