<?php
declare(strict_types=1);


namespace test;

/**Генератор случайных чисел.
 * Использует линейный конгруэнтный метод: https://en.wikipedia.org/wiki/Linear_congruential_generator
 *
 * @package test
 */
class Random
{
    private $seed;
    private $state;
    private $modulus = 6075;
    private $multiplier = 106;
    private $increment = 1283;

    /** Конструктор.
     *
     * @param int $seed Принимает на вход стартовое значение для генератора.
     *                  По умолчанию - использует текущее время в системе.
     */
    public function __construct(int $seed = null)
    {
        if ($seed === null) {
            $seed = time() % $this->modulus;
        } else {
            $this->seed = $seed;
        }
        $this->state = $seed;
    }

    /** Задаёт альтернативные значения параметров генерации.
     *
     * @param int $newModulus
     * @param int $newMultiplier
     * @param int $newIncrement
     */
    public function setParameters(int $newModulus, int $newMultiplier, int $newIncrement): void
    {
        $this->modulus = $newModulus;
        $this->multiplier = $newMultiplier;
        $this->increment = $newIncrement;
    }

    /** Создаёт и возвращает следующее значение генератора.
     *
     * @return int
     */
    public function getNext(): int
    {
        $this->state = ($this->state * $this->multiplier + $this->increment) % $this->modulus;
        return $this->state;
    }

    public function reset(): void
    {
        $this->state = $this->seed;
    }
}
