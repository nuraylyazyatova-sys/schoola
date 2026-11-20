
<?php
// Локальді орнату және күн мәндерін таңдау
setlocale(LC_ALL, "russian");

$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');

// Windows-1251 -> UTF-8
if (!mb_check_encoding($mon, 'UTF-8')) {
    $mon = iconv('CP1251', 'UTF-8', $mon);
}

// Ағымдағы уақытты анықтау
$hour = (int) strftime('%H');
$welcome = '';

if ($hour >= 0 && $hour < 6) {
    $welcome = 'Доброй ночи';
} elseif ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
} elseif ($hour >= 18 && $hour <= 23) {
    $welcome = 'Добрый вечер';
} else {
    $welcome = 'Доброе время суток';
}

// Инициализация массива
$leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Сайт нашей школы</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

<div id="header">
    <img src="logo.gif" width="187" height="29"
         alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
</div>

<div id="content">

    <h1><?= $welcome ?>, Гость!</h1>

    <blockquote>
        <?php
        echo 'Сегодня ', $day, ' число, ',
             $mon, ' месяц, ', $year, ' год.';
        ?>
    </blockquote>

    <h2>Добро пожаловать на сайт нашей школы!</h2>

    <p>
        Наша школа приглашает всех желающих получить новые знания
        и открыть для себя интересный мир обучения.
    </p>

    <p>
        На нашем сайте вы можете узнать больше о школе,
        познакомиться с информацией и воспользоваться
        различными полезными разделами.
    </p>

    <h2>Наши возможности</h2>

    <p>
        Мы предлагаем удобные материалы для обучения,
        интересные задания и полезную информацию
        для учеников.
    </p>

    <p>
        Вы можете перейти в разделы сайта с помощью меню навигации.
    </p>

</div>

<div id="nav">

    <h2>Навигация по сайту</h2>

    <!-- Меню -->
    <ul>
        <?php foreach ($leftMenu as $item): ?>
            <li>
                <a href="<?= $item['href'] ?>">
                    <?= $item['link'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- Меню -->

</div>

<div id="footer">
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?= $year ?>
</div>

</body>
</html>
