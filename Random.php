<?php
declare(strict_types=1);


namespace test;

/**
 * Class Random - random number generator.
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

    /**
     * Random constructor.
     *
     * @param int $seed
     */
    public function __construct(int $seed)
    {
        $this->seed = $seed;
        $this->state = $seed;
    }

    /** generates and returns a new state of a random number generator (with Linear congruential method)
     * https://en.wikipedia.org/wiki/Linear_congruential_generator
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
