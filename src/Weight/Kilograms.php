<?php
namespace Tepuilabs\UnitConversions\Weight;

class Kilograms
{
    private float $kilograms;

    /**
     * __construct function
     *
     * @param float $kilograms
     */
    final public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    /**
     * fromKilograms function
     *
     * @param float $kilograms
     * @return self
     */
    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    /**
     * toLbs function
     *
     * @return float
     */
    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }

    /**
     * toStones function
     *
     * @return float
     */
    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }
}
