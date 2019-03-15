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
        parent::$description = 'Ripple description.';
        parent::$website = [
            'https://ripple.com/xrp/'
        ];
        parent::$explorer = [
            'https://xrpcharts.ripple.com/#/graph/',
            'https://bithomp.com/explorer/'
        ];
        parent::$source_code = [
            'https://github.com/ripple'
        ];
    }
}
