<?php

declare(strict_types=1);

namespace BurritoFactory;

use BurritoFactory\Ingredients\Pain;
use BurritoFactory\Ingredients\PainGrillé;
use BurritoFactory\Ingredients\Poivron;
use BurritoFactory\Ingredients\PoivronFondant;
use Mockery;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

class CuisinierTest extends TestCase
{
    use ProphecyTrait;
    /**
     * @test
     */
    public function prépare_des_poivrons_fondants_avec_un_four(): void
    {
        $poivron = new Poivron();


        $kulinarisk = Mockery::mock(Four::class);
        $kulinarisk->allows('cuire')
            ->withArgs([$poivron, 25])
            ->andReturn(new PoivronFondant());

        $cuisiner = new Cuisinier($kulinarisk);

        $platPréparé = $cuisiner->prépareUnPoivronFondant($poivron);

        $this->assertEquals(new PoivronFondant(), $platPréparé);
    }

    /**
     * @test
     */
    public function prépare_du_pain_grillé_avec_un_four(): void
    {
        $pain = new Pain();

        $four = $this->prophesize(Four::class);

        $four->cuire($pain, 2)->willReturn(new PainGrillé());

        $cuisiner = new Cuisinier($four->reveal());

        $platPréparé = $cuisiner->prépareDuPainGrillé($pain);

        $this->assertEquals(new PainGrillé(), $platPréparé);
    }

}
