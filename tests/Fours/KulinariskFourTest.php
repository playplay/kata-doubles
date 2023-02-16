<?php

namespace BurritoFactory\Fours;

use AKEI\Kulinarisk;
use BurritoFactory\Ingredients\Poivron;
use BurritoFactory\Ingredients\PoivronFondant;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class KulinariskFourTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public function testItCooks(): void
    {
        /** @var MockInterface&Kulinarisk $kulinariskSpy */
        $kulinariskSpy = \Mockery::spy(Kulinarisk::class);
        $four = new KulinariskFour($kulinariskSpy);

        $poivron = new Poivron();

        $four->cuire($poivron, 25);

        $kulinariskSpy->shouldHaveReceived('laga')->with($poivron, 25);
    }

    public function testItReallyCooks(): void
    {
        $four = new KulinariskFour(new Kulinarisk());
        $poivron = new Poivron();

        $plat = $four->cuire($poivron, 25);

        $this->assertInstanceOf(PoivronFondant::class, $plat);
    }
}
