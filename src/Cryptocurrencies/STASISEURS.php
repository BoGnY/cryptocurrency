<?php

declare(strict_types=1);

namespace CryptoTech\Cryptocurrency;

class STASISEURS extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public static function build()
    {
        parent::$id = 2989;
        parent::$name = 'STASIS EURS';
        parent::$symbol = 'EURS';
        parent::$type = 'token';
        parent::$mineable = false;
        parent::$algorithm = Algorithm::PoW;
        parent::$description = 'STASIS provides a full-service tokenization platform, including token creation/redemption, third-party audits, custodial services, and deep expertise in current regulatory environment. Tokenized assets are always backed 1:1 by collateral held in reserve accounts. The EURS stablecoin combines the benefits of blockchain technology with the reputation and relative stability of the euro.';
        parent::$website = [
            'https://stasis.net',
        ];
        parent::$explorer = [
            'https://etherscan.io/token/0xdb25f211ab05b1c97d595516f45794528a807ad8',
            'https://ethplorer.io/address/0xdb25f211ab05b1c97d595516f45794528a807ad8',
        ];
        parent::$source_code = [
            'https://github.com/STASISNET',
        ];
    }
}
