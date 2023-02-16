<?php

namespace BurritoFactory\Fours;

use AKEI\Kulinarisk;
use BurritoFactory\Ingredients\Poivron;
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
}
