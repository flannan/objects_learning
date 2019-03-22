<?php
declare(strict_types=1);


namespace test;

use function assert;
use UnexpectedValueException;

/** Класс квадратов.
 *
 * @package test
 */
class Square
{
    protected $side;

    /** Конструктор
     * @param float $side
     */
    public function __construct(float $side)
    {
        assert($side>0, new UnexpectedValueException('Positive side expected'));
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
