<?php

namespace App\Services;

use App\Repositories\Interfaces\TransactionRepositoryInterface;
use App\Services\Interfaces\TransactionServiceInterface;
use App\Enums\Messages;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use RuntimeException;

class TransactionService implements TransactionServiceInterface
{
    public function __construct(
        private TransactionRepositoryInterface $repository,
        private UserRepositoryInterface $userRepository
    ) {
    }

    public function process(array $data): string
    {
        $transaction = $this->repository->persist($data);

        Bugsnag::notifyException(new RuntimeException("A new test error"));

        return Messages::TRANSACTION_SUCCESSFULLY;
    }
}
