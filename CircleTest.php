<?php
declare(strict_types=1);

namespace test;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

/** Тест для класса Circle
 *
 * @package test
 */
class CircleTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once __DIR__ . '/Circle.php';
    }

    public function testGetArea()
    {
        $circle = new Circle(1);
        $this::assertSame($circle->getArea(), M_PI);
        $circle->setRadius(2);
        $this::assertSame($circle->getArea(), 4 * M_PI);
    }

    public function testSetRadius()
    {
        $circle = new Circle(1);

        $this->expectException(InvalidArgumentException::class);
        $circle->setRadius(-2);
        $this::fail('no exception');
    }

    public function testGetCircumference()
    {
        $circle = new Circle(1);
        $this::assertSame($circle->getCircumference(), 2 * M_PI);
        $circle->setRadius(2);
        $this::assertSame($circle->getCircumference(), 4 * M_PI);
    }

    public function test__construct()
    {
        $this::assertIsObject(new Circle(1));
    }
}
