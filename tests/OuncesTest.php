<?php
namespace Tepuilabs\UnitConversions;

use PHPUnit\Framework\TestCase;
use Tepuilabs\UnitConversions\Ounces;

class OuncesTest extends TestCase
{

    /** @test */
    public function it_can_conver_ounces_to_lbs()
    {
        $lbs = Ounces::fromOunces(100)->toLbs();

        $this->assertEquals(6.25, $lbs);
    }

    /** @test */
    public function it_can_conver_ounces_to_grams()
    {
        $lbs = Ounces::fromOunces(100)->toGrams();

        $this->assertEquals(2834.949254408346, $lbs);
    }
}
