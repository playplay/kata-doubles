<?php

declare(strict_types=1);

namespace BurritoFactory;

use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\Poivron;
use BurritoFactory\Ingredients\Tartine;

final class Cuisine
{

    public function __construct(private readonly Cuisinier $cuisinier,
    )
    {
    }

    public function prépareTartineAuPoivron(): Tartine
    {
        $poivronCuit = $this->cuisinier->prépareUnPoivronFondant(new Poivron());
        $painGrillé = $this->cuisinier->prépareDuPainGrillé(new Pain());

        return $painGrillé->dépose($poivronCuit);
    }
}