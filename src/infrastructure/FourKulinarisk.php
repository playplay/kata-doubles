<?php

declare(strict_types=1);

namespace BurritoFactory\infrastructure;

use AKEI\Kulinarisk;
use BurritoFactory\Four;

final class FourKulinarisk implements Four
{
    private Kulinarisk $four;

    public function __construct(Kulinarisk $four)
    {
        $this->four = $four;
    }

    public function cuisson($ingrédient, int $tempsCuissonEnMinutes): mixed
    {
        return $this->four->bake($ingrédient, $tempsCuissonEnMinutes);
    }
}
