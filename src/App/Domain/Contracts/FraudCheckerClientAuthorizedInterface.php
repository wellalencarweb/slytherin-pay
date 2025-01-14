<?php

declare(strict_types=1);

namespace App\Domain\Contracts;

use App\Domain\Contracts\FraudCheckerClientInterface;
use App\Domain\Entities\Transaction;

interface FraudCheckerClientAuthorizedInterface extends FraudCheckerClientInterface
{
    public function isAuthorized(Transaction $transaction, array $simulateAuthorized): bool;
}
