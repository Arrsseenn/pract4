    <?php
    $c = $_POST['c'] ?? 0; 
    $d = $_POST['d'] ?? 0; 

    if (!is_numeric($c) || !is_numeric($d)) {
        echo "<p>Помилка: Введені значення не є цілими числами.</p>";
        exit;
    }

    $c = (int)$c;
    $d = (int)$d;

    $sum = $c + $d;
    $product = $c * $d;
    $difference = $c - $d;
    if ($d != 0) {
        $quotient = $c / $d;
    } else {
        $quotient = "Ділення на нуль";
    }

    echo "<h2>Results:</h2>";
    echo "<p>Сума чисел $c і $d: $sum </p>";
    echo "<p>Добуток чисел $c і $d: $product </p>";
    echo "<p>Різниця чисел $c і $d: $difference </p>";
    echo "<p>Частка числа $c на число $d: $quotient </p>";
    ?>

