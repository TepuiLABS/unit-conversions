<?php
namespace Tepuilabs\UnitConversions;

use PHPUnit\Framework\TestCase;
use Tepuilabs\UnitConversions\Weight\Pounds;

class PoundsTest extends TestCase
{
    /** @test */
    public function it_can_conver_pounds_to_kl()
    {
        $kl = Pounds::fromPounds(100)->toKl();

        $this->assertEquals(45.35970244035199, $kl);
    }

    /** @test */
    public function it_can_conver_pounds_to_ounces()
    {
        $kl = Pounds::fromPounds(100)->toOunces();

        $this->assertEquals(1600.000, $kl);
    }
}
