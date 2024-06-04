<?php
$a = $_GET['a'] ?? 0; 
$b = $_GET['b'] ?? 0; 


if (!is_numeric($a) || !is_numeric($b)) {
    echo "Помилка: Введені значення не є цілими числами.";
    exit;
}

$a = (int)$a;
$b = (int)$b;

$sum = $a + $b;
$product = $a * $b;
$difference = $a - $b;
if ($b != 0) {
    $quotient = $a / $b;
} else {
    $quotient = "Ділення на нуль";
}

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Math Operations</title>";
echo "</head>";
echo "<body>";
echo "<h1>Math Operations with PHP</h1>";
echo "<h2>Results:</h2>";
echo "<p>Сума чисел $a і $b: $sum </p>";
echo "<p>Добуток чисел $a і $b: $product </p>";
echo "<p>Різниця чисел $a і $b: $difference </p>";
echo "<p>Частка числа $a на число $b: $quotient </p>";
echo "</body>";
echo "</html>";
?>
