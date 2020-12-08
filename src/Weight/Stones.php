<?php
namespace Tepuilabs\UnitConversions\Weight;

class Stones
{
    private $stones;

    /**
     * fromStones function
     *
     * @param float $stones
     * @return self
     */
    public static function fromStones(float $stones): self
    {
        return new static($stones);
    }

    /**
     * __construct function
     *
     * @param float $stones
     */
    public function __construct(float $stones)
    {
        $this->stones = $stones;
    }

    /**
     * toKl function
     *
     * @return float
     */
    public function toKl(): float
    {
        return $this->stones / 0.15747;
    }
}
