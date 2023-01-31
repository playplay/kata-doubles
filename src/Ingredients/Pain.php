<?php

declare(strict_types=1);

namespace BurritoFactory\Ingredients;

class Pain
{
    public function dépose($ingredient): Tartine
    {
        return Tartine::avec($this, [$ingredient]);
    }
}
