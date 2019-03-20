<?php
declare(strict_types=1);


namespace test;

/**
 * Class Square
 *
 * @package test
 */
class Square
{
    protected $side;

    /**
     * Square constructor.
     *
     * @param float $side
     */
    public function __construct(float $side)
    {
        $this->side=$side;
    }

    /**
     * @return float
     */
    public function getSide(): float
    {
        return $this->side;
    }
}
