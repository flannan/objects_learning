<?php


namespace test;

/**
 * Class SquaresGenerator
 *
 * @package test
 */
class SquaresGenerator
{
    /**
     * @param $side
     * @param $numberOfSquares
     *
     * @return array
     */
    public static function generate($side, $numberOfSquares)
    {
        $squares = [];
        for ($key = 0; $key < $numberOfSquares; $key++) {
            $squares[] = new Square($side);
        }
        return $squares;
    }
}
