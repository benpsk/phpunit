<?php

use App\PrimeFactor;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class PrimeFactorsTest extends TestCase
{

  #[DataProvider('factors')]
  function test_it_gerates_prime_factors($number, $expected)
  {
    $factors = new PrimeFactor();

    $this->assertEquals($expected, $factors->generate($number));
  }

  public static function factors(): array
  {
    return [
      [1, []],
      [2, [2]],
      [3, [3]],
      [4, [2, 2]],
      [5, [5]],
      [6, [2, 3]],
      [7, [7]],
      [8, [2, 2, 2]],
      [9, [3, 3]],
      [10, [2, 5]],
      [11, [11]],
      [12, [2, 2, 3]],
      [100, [2, 2, 5, 5]]
    ];
  }
}
