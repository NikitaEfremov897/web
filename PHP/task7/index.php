<?php
function generatePassword($length) {
    if ($length <= 0) {
        return '';
    }
    $chars = array_merge(
        range('a', 'z'),
        range('A', 'Z'),
        range('0', '9')
    );
    $shuffled = str_shuffle(implode('', $chars));
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = random_int(0, strlen($shuffled) - 1);
        $password .= $shuffled[$index];
    }

    return $password;
}
$password = generatePassword(10);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Генератор паролей</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Сгенерированный пароль</h1>
    <p class="password"><?= htmlspecialchars($password) ?></p>
</body>
</html>