<?php

declare(strict_types=1);

namespace BurritoFactory\infrastructure;

use AKEI\Kulinarisk;
use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\PainGrillé;
use PHPUnit\Framework\TestCase;

final class FourKulinariskTest extends TestCase
{
    private FourKulinarisk $sut;

    protected function setUp(): void
    {
        $this->sut = new FourKulinarisk(new Kulinarisk());
    }

    public function test_pain_non_cuit(): void
    {
        // Act
        $resultat = $this->sut->cuisson(new Pain(), 0);

        // Assert
        $this->assertEquals(new Pain(), $resultat);
    }

    public function test_pain_grillé(): void
    {
        // Act
        $resultat = $this->sut->cuisson(new Pain(), 2);

        // Assert
        $this->assertEquals(new PainGrillé(), $resultat);
    }
}
