<?php

declare(strict_types=1);

namespace App\Kernel\Promotion\Domain\Entity;

use App\SharedKernel\Domain\Timestamp;
use App\Kernel\Promotion\Domain\ValueObject\PromotionType;
use Symfony\Component\Uid\Uuid;

class Promotion implements Timestamp
{
    private \DateTimeImmutable $createdAt;
    private \DateTimeImmutable $updatedAt;

    public function __construct(
        private readonly int                $id,
        private readonly PromotionType      $type,
        private readonly \DateTimeImmutable $dateOfBirth,
        private readonly string             $name,
        private readonly string             $description,
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): PromotionType
    {
        return $this->type;
    }

    public function getDateOfBirth(): \DateTimeImmutable
    {
        return $this->dateOfBirth;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }


    public function setUpdatedAt(\DateTimeImmutable $date): void
    {
        $this->updatedAt = $date;
    }

    public function setCreatedAt(\DateTimeImmutable $date): void
    {
        $this->createdAt = $date;
    }
}