<?php
declare(strict_types=1);


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
    public static function generate(float $side, int $numberOfSquares): array
    {
        $squares = [];
        for ($key = 0; $key < $numberOfSquares; $key++) {
            $squares[] = new Square($side);
        }
        return $squares;
    }
}
