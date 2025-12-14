<?php
$result = null;
$error = null;

if ($_POST) {
    $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
    $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
    $operation = $_POST['operation'] ?? '';

    if ($num1 === false || $num2 === false) {
        $error = 'Введите корректные числа.';
    } elseif (!in_array($operation, ['add', 'subtract', 'multiply', 'divide'])) {
        $error = 'Выберите операцию.';
    } else {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $error = 'Деление на ноль!';
                } else {
                    $result = $num1 / $num2;
                }
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Калькулятор</h1>

    <form action="" method="post">
        <input type="number" step="any" name="num1" placeholder="Первое число" required>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">−</option>
            <option value="multiply">×</option>
            <option value="divide">÷</option>
        </select>
        <input type="number" step="any" name="num2" placeholder="Второе число" required>
        <button type="submit">Вычислить</button>
    </form>

    <?php if ($error): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php elseif ($result !== null): ?>
        <p class="result">Результат: <?= htmlspecialchars(number_format($result, 2, ',', ' ')) ?></p>
    <?php endif; ?>
</body>
</html>