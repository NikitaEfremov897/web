<?php
function printNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        echo $i . "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вывод чисел</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="output">
        <?php printNumbers(1, 10); ?>
    </div>
</body>
</html>