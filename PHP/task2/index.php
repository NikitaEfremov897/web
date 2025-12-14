<?php
$num1 = 15;
$num2 = 23;

$sum = $num1 + $num2;
$isEven = ($sum % 2 === 0);

$message = "Числа: $num1 и $num2. Сумма: $sum. Это " . ($isEven ? 'чётное' : 'нечётное') . " число.";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Проверка чётности суммы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result"><?= htmlspecialchars($message) ?></div>
</body>
</html>