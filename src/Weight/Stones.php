<?php
namespace Tepuilabs\UnitConversions\Weight;

class Stones
{
    private $stones;

    /**
     * __construct function
     *
     * @param float $stones
     */
    final public function __construct(float $stones)
    {
        $this->stones = $stones;
    }

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
     * toKl function
     *
     * @return float
     */
    public function toKl(): float
    {
        return $this->stones / 0.15747;
    }
}
