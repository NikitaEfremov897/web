<?php
$name = "Никита";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Приветствие</title>
</head>
<body>
    <h1>Привет, <?= htmlspecialchars($name) ?>!</h1>
</body>
</html>