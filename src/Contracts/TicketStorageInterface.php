<?php

declare(strict_types=1);

namespace YieldStudio\LaravelExpoNotifications\Contracts;

interface TicketStorageInterface
{
    public function getByKey(string $key);

    public function getByValue(string $value);

    public function store(string $ticketId, string $token);

    public function delete(array $ids);

    public function retrieve(int $amount = 1000);

    public function total();
}