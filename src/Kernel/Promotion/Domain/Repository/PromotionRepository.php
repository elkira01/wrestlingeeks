<?php

declare(strict_types=1);

namespace App\Kernel\Promotion\Domain\Repository;

use App\Kernel\Promotion\Domain\Entity\Promotion;
interface PromotionRepository
{
    public function save(Promotion $promotion): void;
}