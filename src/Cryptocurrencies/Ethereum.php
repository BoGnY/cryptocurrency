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
        parent::$description = 'Ethereum is an open-source, public, blockchain-based distributed computing platform featuring smart contract (scripting) functionality. It provides a decentralized Turing-complete virtual machine, the Ethereum Virtual Machine (EVM), which can execute scripts using an international network of public nodes. Ethereum also provides a cryptocurrency token called "Ether", which can be transferred between accounts and used to compensate participant nodes for computations performed. "Gas", an internal transaction pricing mechanism, is used to mitigate spam and allocate resources on the network.';
        parent::$website = [
            'https://www.ethereum.org',
        ];
        parent::$explorer = [
            'https://etherscan.io',
            'https://ethplorer.io/address/%s',
            'https://blockchair.com/ethereum',
        ];
        parent::$source_code = [
            'https://github.com/ethereum',
        ];
    }
}
