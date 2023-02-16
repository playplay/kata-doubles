<?php

declare(strict_types=1);

namespace BurritoFactory;

interface Four
{
    public function cuire($ingredient, int $tempsDeCuisson): mixed;
}
