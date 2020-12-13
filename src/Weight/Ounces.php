<?php
namespace Tepuilabs\UnitConversions\Weight;

class Ounces
{
    private float $ounces;

    /**
     * __construct function
     *
     * @param float $ounces
     */
    final public function __construct(float $ounces)
    {
        $this->ounces = $ounces;
    }

    /**
     * fromOunces function
     *
     * @param float $ounces
     * @return self
     */
    public static function fromOunces(float $ounces): self
    {
        return new static($ounces);
    }

    /**
     * toLbs function
     *
     * @return float
     */
    public function toLbs(): float
    {
        return $this->ounces * 0.062500;
    }

    public function toGrams(): float
    {
        return $this->ounces / 0.035274;
    }
}
