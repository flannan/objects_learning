<?php

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
     * @param int $inputRadius
     */
    public function __construct($inputRadius)
    {
        $this->radius = $inputRadius;
    }

    /** Вычисляет площадь круга
     *
     * @return float|int
     */
    public function getArea()
    {
        return (M_PI * $this->radius * $this->radius);
    }

    /** Вычисляет длину окружности круга.
     *
     * @return float|int
     */
    public function getCircumference()
    {
        return (2 * M_PI * $this->radius);
    }
}
