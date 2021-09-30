<?php

namespace App\Services;

use App\Repositories\Interfaces\TransactionRepositoryInterface;
use App\Services\Interfaces\TransactionServiceInterface;
use App\Enums\Messages;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Exception;

class TransactionService implements TransactionServiceInterface
{
    public function __construct(
        private TransactionRepositoryInterface $repository,
        private UserRepositoryInterface $userRepository
    ) {
    }

    public function process(array $data): string
    {
        throw new Exception('User Not Found', 404);
        $this->repository->persist($data);

        return Messages::TRANSACTION_SUCCESSFULLY;
    }
}
