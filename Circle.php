<?php
declare(strict_types=1);

namespace test;

/** Реализуйте класс Circle для описания кругов.
 * У круга есть только одно свойство - его радиус.
 * Реализуйте методы getArea и getCircumference, которые возвращают площадь и периметр круга соответственно.
 *
 */
class Circle
{
    public $radius = 0;

    /**
     * Circle constructor.
     *
     * @param float $inputRadius
     */
    public function __construct(float $inputRadius)
    {
        $this->radius = $inputRadius;
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
