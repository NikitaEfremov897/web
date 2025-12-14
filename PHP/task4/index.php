<?php
$users = [
    [
        "name" => "Никита",
        "age"  => 22,
        "city" => "Йошкар-Ола"
    ],
    [
        "name" => "Иван",
        "age"  => 23,
        "city" => "Москва"
    ],
    [
        "name" => "Махмуд",
        "age"  => 22,
        "city" => "Душанбе"
    ]
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список пользователей</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Пользователи</h1>
    <ul class="users-list">
        <?php foreach ($users as $user): ?>
            <li class="user-item">
                Имя: <?= htmlspecialchars($user['name']) ?>,  
                Возраст: <?= (int)$user['age'] ?>,  
                Город: <?= htmlspecialchars($user['city']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>