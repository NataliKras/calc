<?php

namespace App\Calc;

interface CalcInterface
{
    /**
     * cложение 2х чисел
     * @var float $a первое число
     */
    public function plus(float $a, float $b): float;
    public function minus(float $a, float $b): float;
    public function multiply(float $a, float $b): float;
    public function divide(float $a, float $b): float;
}
