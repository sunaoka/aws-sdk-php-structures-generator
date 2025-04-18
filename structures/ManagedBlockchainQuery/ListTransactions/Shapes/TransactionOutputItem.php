<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transactionHash
 * @property string|null $transactionId
 * @property 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET' $network
 * @property \Aws\Api\DateTimeResult $transactionTimestamp
 * @property 'FINAL'|'NONFINAL'|null $confirmationStatus
 */
class TransactionOutputItem extends Shape
{
    /**
     * @param array{
     *     transactionHash: string,
     *     transactionId?: string|null,
     *     network: 'ETHEREUM_MAINNET'|'ETHEREUM_SEPOLIA_TESTNET'|'BITCOIN_MAINNET'|'BITCOIN_TESTNET',
     *     transactionTimestamp: \Aws\Api\DateTimeResult,
     *     confirmationStatus?: 'FINAL'|'NONFINAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
