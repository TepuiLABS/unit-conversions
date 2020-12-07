<?php

namespace Tepuilabs\UnitConversions;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

<<<<<<< HEAD
	public function toLbs(): float
	{
		return $this->kilograms * 2.204623;
	}

	public function toStones(): float
	{
		return $this->kilograms * 0.15747;
	}
=======
    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
>>>>>>> 03348bf329d3d652359ea4b8997d6b2c5e624743
}
