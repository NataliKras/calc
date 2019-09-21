<?php

namespace App\Calc;

class Calc implements CalcInterface
{
    public function plus(float $a, float $b): float
    {
        return $a + $b;
    }

    public function minus(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float $b): float
    {
        return $a / $b;
    }
}
