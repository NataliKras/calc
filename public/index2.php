<?php
// declare(strict_types=1);

session_start();
// echo "Hello";
require "../src/autoload.php";

use App\Calc\Calc;

$obj = new Calc();
echo $obj->plus(3, 2);
echo "<br>";

echo $obj->minus(3, 2);
echo "<br>";

echo $obj->multiply(3, 2);
echo "<br>";

echo $obj->divide(3, 2);
echo "<br>";
