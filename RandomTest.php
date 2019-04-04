<?php
declare(strict_types=1);

namespace test;

use PHPUnit\Framework\TestCase;

/** Юнит-тест для класса Random
 * @package test
 */
class RandomTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once __DIR__ . '/Random.php';
    }

    public function testGetNext(): void
    {
        $seq = new Random(100);
        $result1 = $seq->getNext();
        $result2 = $seq->getNext();
        $this::assertNotSame($result1, $result2);
    }

    public function test__construct(): void
    {
        $this::assertIsObject(new Random);
    }

    public function testReset(): void
    {
        $seq = new Random(100);
        $result1 = $seq->getNext();
        $result2 = $seq->getNext();

        $seq->reset();

        $result21 = $seq->getNext();
        $result22 = $seq->getNext();

        $this::assertSame($result1, $result21);
        $this::assertSame($result2, $result22);
    }

    /**
     * @dataProvider sampleSequenceProvider
     *
     * @param array $settings
     * @param array $sequence
     */
    public function testSampleSequence(array $settings, array $sequence): void
    {
        $seq = new Random($settings[0]);
        $seq->setParameters($settings[1], $settings[2], $settings[3]);
        foreach ($sequence as $value) {
            $this::assertSame($value, $seq->getNext());
        }
    }

    /** sample sequences
     *
     * @return array
     */
    public function sampleSequenceProvider(): array
    {
        return [
            [[0, 10, 7, 7], [7, 6, 9, 0, 7, 6, 9, 0]],
            [[0, 10, 7, 7], [7, 6, 9, 0, 7, 6, 9, 0]]
        ];
    }
}
