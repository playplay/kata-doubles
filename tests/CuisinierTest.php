<?php

declare(strict_types=1);

namespace BurritoFactory;

use AKEI\Kulinarisk;
use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\PainGrillé;
use BurritoFactory\Ingredients\Poivron;
use BurritoFactory\Ingredients\PoivronFondant;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;

class CuisinierTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    /**
     * @test
     */
    public function prépare_des_poivrons_fondants_avec_un_four(): void
    {
        $poivron = new Poivron();

        $four = \Mockery::mock(Four::class);

        $cuisiner = new Cuisinier($four);

        $four->allows('cuisson')->andReturn(new PoivronFondant());

        $platPréparé = $cuisiner->prépareUnPoivronFondant($poivron);

        $this->assertEquals(new PoivronFondant(), $platPréparé);
    }

    /**
     * @test
     */
    public function prépare_du_pain_grillé_avec_un_four(): void
    {
        $pain = new Pain();

        $four = \Mockery::mock(Four::class);

        $cuisiner = new Cuisinier($four);

        $four->allows('cuisson')->andReturn(new PainGrillé());

        $platPréparé = $cuisiner->prépareDuPainGrillé($pain);

        $this->assertEquals(new PainGrillé(), $platPréparé);
    }

}
