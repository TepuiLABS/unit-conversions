<?php
namespace Tepuilabs\UnitConversions;


class Ounces
{
	private float $ounces;


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
	 * __construct function
	 *
	 * @param float $ounces
	 */
	public function __construct(float $ounces)
	{
		$this->ounces = $ounces;
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
