<?php

declare(strict_types=1);

use DestinyMatrix\Calculator\MatrixCalculator;
use PHPUnit\Framework\TestCase;

final class MatrixCalculatorTest extends TestCase
{
  public function testFromDateStringReturnsExpectedPoints(): void
  {
    $result = MatrixCalculator::fromDateString('1990-12-29');
    $this->assertSame(
      [
        'apoint' => 11,
        'bpoint' => 12,
        'cpoint' => 19,
        'dpoint' => 6,
        'epoint' => 12,
        'fpoint' => 5,
        'gpoint' => 4,
        'hpoint' => 17,
        'ipoint' => 7,
        'jpoint' => 18,
        'kpoint' => 4,
        'lpoint' => 22,
        'mpoint' => 8,
        'npoint' => 4,
        'opoint' => 16,
        'ppoint' => 18,
        'qpoint' => 5,
        'rpoint' => 6,
        'spoint' => 5,
        'tpoint' => 6,
        'upoint' => 6,
        'vpoint' => 18,
        'wpoint' => 17,
        'xpoint' => 18,
        'f2point' => 11,
        'f1point' => 16,
        'g2point' => 10,
        'g1point' => 14,
        'i2point' => 13,
        'i1point' => 20,
        'h2point' => 5,
        'h1point' => 22
      ],
      $result->toArray()
    );
  }

  public function testFromPartsMatchesDateString(): void
  {
    $fromString = MatrixCalculator::fromDateString('1985-01-03');
    $fromParts = MatrixCalculator::fromParts(3, 1, 1985);

    $this->assertSame($fromString->toArray(), $fromParts->toArray());
    $this->assertSame(
      [
        'apoint' => 3,
        'bpoint' => 1,
        'cpoint' => 5,
        'dpoint' => 9,
        'epoint' => 18,
        'fpoint' => 4,
        'gpoint' => 6,
        'hpoint' => 12,
        'ipoint' => 14,
        'jpoint' => 9,
        'kpoint' => 5,
        'lpoint' => 14,
        'mpoint' => 19,
        'npoint' => 5,
        'opoint' => 6,
        'ppoint' => 20,
        'qpoint' => 10,
        'rpoint' => 18,
        'spoint' => 21,
        'tpoint' => 19,
        'upoint' => 9,
        'vpoint' => 9,
        'wpoint' => 12,
        'xpoint' => 10,
        'f2point' => 13,
        'f1point' => 17,
        'g2point' => 15,
        'g1point' => 21,
        'i2point' => 5,
        'i1point' => 19,
        'h2point' => 21,
        'h1point' => 6
      ],
      $fromParts->toArray()
    );
  }

  public function testInvalidDateThrows(): void
  {
    $this->expectException(InvalidArgumentException::class);
    MatrixCalculator::fromDateString('2024-02-30');
  }

  public function testReduceNumberBoundaries(): void
  {
    $method = new ReflectionMethod(MatrixCalculator::class, 'reduceNumber');
    $method->setAccessible(true);

    $this->assertSame(22, $method->invoke(null, 22));
    $this->assertSame(5, $method->invoke(null, 23));
    $this->assertSame(28, $method->invoke(null, 199));
  }
}
