<?php
namespace Tepuilabs\UnitConversions\Weight;

class Pounds
{
    private $pounds;

    /**
     * fromPounds function
     *
     * @param float $pounds
     * @return self
     */
    public static function fromPounds(float $pounds): self
    {
        return new static($pounds);
    }

    /**
     * __construct function
     *
     * @param float $pounds
     */
    public function __construct(float $pounds)
    {
        $this->pounds = $pounds;
    }

    /**
     * toKl function
     *
     * @return float
     */
    public function toKl(): float
    {
        return $this->pounds / 2.2046;
    }

    /**
     * toOunces function
     *
     * @return float
     */
    public function toOunces(): float
    {
        return $this->pounds * 16.000;
    }
}
