<?php

namespace App\Services;

use App\Repositories\Interfaces\TransactionRepositoryInterface;
use App\Services\Interfaces\TransactionServiceInterface;
use App\Enums\Messages;
use App\Repositories\Interfaces\UserRepositoryInterface;

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

        return Messages::TRANSACTION_SUCCESSFULLY;
    }
}
