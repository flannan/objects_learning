<?php
declare(strict_types=1);

namespace test;

use function assert;
use UnexpectedValueException;

/** Реализуйте класс Circle для описания кругов.
 * У круга есть только одно свойство - его радиус.
 * Реализуйте методы getArea и getCircumference, которые возвращают площадь и периметр круга соответственно.
 *
 * Ожидается, что радиус круга изменяется чаще, чем требуется вычислять его площадь и длину окружности.
 *
 */
class Circle
{
    protected $radius = 0;

    /** Конструктор
     *
     * @param float $inputRadius
     */
    public function __construct(float $inputRadius)
    {
        $this->checkRadius($inputRadius);
        $this->radius = $inputRadius;
    }


    /** Меняет радиус круга
     * @param float $inputRadius
     */
    public function setRadius(float $inputRadius): void
    {
        $this->checkRadius($inputRadius);
        $this->radius = $inputRadius;
    }

    /**
     * @param float $inputRadius
     */
    protected function checkRadius(float $inputRadius): void
    {
        assert(
            $inputRadius >= 0,
            new UnexpectedValueException('positive radius expected. Received radius was ' . $inputRadius)
        );
    }


    /** Вычисляет площадь круга
     *
     * @return float
     */
    public function getArea(): float
    {
        return (M_PI * $this->radius * $this->radius);
    }

    /** Вычисляет длину окружности круга.
     *
     * @return float
     */
    public function getCircumference(): float
    {
        return (2 * M_PI * $this->radius);
    }
}
