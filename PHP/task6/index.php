<?php
$products = [
    ['name' => 'Ручка', 'price' => 5, 'stock' => 100],
    ['name' => 'Ноутбук', 'price' => 1200, 'stock' => 10],
    ['name' => 'Блокнот', 'price' => 15, 'stock' => 50],
    ['name' => 'Мышь', 'price' => 45, 'stock' => 0],
    ['name' => 'Клавиатура', 'price' => 70, 'stock' => 20],
    ['name' => 'Карандаш', 'price' => 2, 'stock' => 200],
];

$filtered = array_filter($products, function($item) {
    return $item['price'] < 50 && $item['stock'] > 0;
});
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Товары</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Доступные товары (до 50 ₽, в наличии)</h1>

    <?php if (!empty($filtered)): ?>
        <ul class="products">
            <?php foreach ($filtered as $product): ?>
                <li>
                    <?= htmlspecialchars($product['name']) ?> — 
                    <?= number_format($product['price'], 0, ',', ' ') ?> ₽, 
                    остаток: <?= $product['stock'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Нет товаров, соответствующих условиям.</p>
    <?php endif; ?>
</body>
</html>