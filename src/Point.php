<?php

namespace DevWeb\ObjetPhp;

class Point {

    public function __construct(protected float $x = 0.0, protected float $y = 0.0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(): string {
        return sprintf("Point (%5.2f, %5.2f)",$this->x, $this->y);
    }


    /**
     * @return float
     */
    public function getX(): float {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): self {
        $this->x = $x;

        return $this;
    }

    /**
     * @return float
     */
    public function getY(): float {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): self {
        $this->y = $y;

        return $this;
    }
}
