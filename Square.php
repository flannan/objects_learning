<?php


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
     * @param $side
     */
    public function __construct($side)
    {
        $this->side=$side;
    }

    public function getSide()
    {
        return $this->side;
    }
}
