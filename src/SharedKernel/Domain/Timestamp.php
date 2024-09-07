<?php

declare(strict_types=1);

namespace App\SharedKernel\Domain;

interface Timestamp
{
    public function setUpdatedAt(\DateTimeImmutable $date): void;

    public function setCreatedAt(\DateTimeImmutable $date): void;
}
