<?php

declare(strict_types=1);

namespace BurritoFactory\Ingredients;

final class Tartine
{


    private function __construct(
        private readonly Pain $base,
        private readonly array $ingredients,
    )
    {
    }

    public static function avec(Pain $pain, array $ingredients): self
    {
        return new self($pain, $ingredients);
    }

    public function __toString(): string
    {
        $ingredients = implode(",", array_map(fn($i) => $this->formateNomDuPlat($i), $this->ingredients));

        return <<<EOS
Une tartine sur {$this->formateNomDuPlat($this->base)}
Avec: {$ingredients}
EOS;

    }

    private function formateNomDuPlat(object $platCuit): string
    {
        $nomDuPlatExploded = explode('\\', get_class($platCuit));

        $nomDuPlatSansNamespace = array_pop($nomDuPlatExploded);

        return trim(implode(" ", preg_split('/(?=[A-Z])/', $nomDuPlatSansNamespace)));
    }
}