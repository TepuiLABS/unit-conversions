<?php
namespace Tepuilabs\UnitConversions;

use PHPUnit\Framework\TestCase;
use Tepuilabs\UnitConversions\Weight\Stones;

class StonesTest extends TestCase
{
    /** @test */
    public function it_can_conver_stones_to_kl()
    {
        $kl = Stones::fromStones(100)->toKl();

        $this->assertEquals(635.0415952244872, $kl);
    }
}
