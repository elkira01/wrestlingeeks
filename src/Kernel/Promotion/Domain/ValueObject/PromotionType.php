<?php

declare(strict_types=1);

namespace App\Kernel\Promotion\Domain\ValueObject;
enum PromotionType : string
{
    case REGULAR = 'regular';
    case INDEPENDENT = 'independent';
}