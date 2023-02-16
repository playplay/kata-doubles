<?php

declare(strict_types=1);

namespace BurritoFactory;

use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\Poivron;

final class Cuisinier
{
    public function __construct(
        private readonly Four $four,
    ) {}

    public function prépareUnPoivronFondant(Poivron $poivron)
    {
        return $this->four->cuire($poivron, 25);
    }

    public function prépareDuPainGrillé(Pain $pain)
    {
        return $this->four->cuire($pain, 2);
    }
}
