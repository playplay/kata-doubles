<?php

declare(strict_types=1);

namespace BurritoFactory\Fours;

use AKEI\Kulinarisk;
use BurritoFactory\Four;

final class KulinariskFour implements Four
{
    private Kulinarisk $kulinarisk;

    public function __construct(Kulinarisk $kulinarisk)
    {
        $this->kulinarisk = $kulinarisk;
    }

    public function cuire($ingredient, int $tempsDeCuisson): mixed
    {
        return $this->kulinarisk->laga($ingredient, $tempsDeCuisson);
    }
}
