<?php

// Задание 1: Определение четности чисел

$arr = [1, 2, 3, 4, 5, 6];
foreach ($arr as $elem) {
    if ($elem % 2 == 0) {
        echo "четное число: " . $elem . "\n";
    } else {
        echo "нечетное число: " . $elem . "\n";
    }
}

// Задание 2: Подсчет положительных и отрицательных чисел
$array = [2, 4, -4, 12, -3, 1, -15];
$posit = 0;
$negat = 0;

foreach ($array as $v) {
    if ($v > 0) {
        $posit++;
    } else {
        $negat++;
    }
}
echo "Количество положительных чисел: " . $posit . "\n";
echo "Количество отрицательных чисел: " . $negat . "\n";

// Задание 3: Таблица умножения

$number = 5;
for ($i = 1; $i <= 10; $i++) {
    echo $number . " * " . $i . " = " . $number * $i . "\n";
}

// Задание 4: Условное отображение оценок студентов

$students = ["Иван" => 85, "Мария" => 74, "Алексей" => 40];
foreach ($students as $name => $score) {
    if ($score >= 50) {
        echo $name . " сдал экзамен!" ."\n";
    } else {
        echo $name . " не сдал экзамен!" ."\n";
    }
}

// Задание 5: Поиск минимального и максимального значений
$numbers = array_fill(0, 8, 0);
for ($i = 0; $i < 8; $i++) {
    $numbers[$i] = rand(1, 100);
}

$min = $numbers[0];
$max = $numbers[0];
foreach ($numbers as $num) {
    if ($num < $min) {
        $min = $num;
    }
    if ($num > $max) {
        $max = $num;
    }
}
echo "Минимальное значение: " . $min . "\n";
echo "Максимальное значение: " . $max . "\n";

?>