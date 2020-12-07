<?php

namespace Tepuilabs\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Tepuilabs\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_conver_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
