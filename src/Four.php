<?php

declare(strict_types=1);

namespace BurritoFactory;

interface Four
{
    public function cuisson($ingrédient, int $tempsCuissonEnMinutes): mixed;
}
