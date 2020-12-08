<?php

namespace Tepuilabs\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Tepuilabs\UnitConversions\Weight\Kilograms;

class KilogramsTest extends TestCase
{
    /** @test */
    public function it_can_conver_kilograms_to_lbs()
    {
        $lbs = Kilograms::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }

    /** @test */
    public function it_can_conver_kilograms_to_stones()
    {
        $lbs = Kilograms::fromKilograms(100)->toStones();

        $this->assertEquals(15.747, $lbs);
    }
}
