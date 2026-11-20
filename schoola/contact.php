
<!DOCTYPE html>
<html>
<head>
    <title>Контакты</title>
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

    <h1>Обратная связь</h1>

    <!-- Область основного контента -->

    <?php
    // Получаем значение post_max_size
    $size = ini_get('post_max_size');

    // Определяем единицу измерения
    $unit = strtoupper(substr($size, -1));

    // Получаем числовое значение
    $size = (int) $size;

    // Переводим размер в байты
    switch ($unit) {
        case 'G':
            $size *= 1024 * 1024 * 1024;
            break;

        case 'M':
            $size *= 1024 * 1024;
            break;

        case 'K':
            $size *= 1024;
            break;

        default:
            break;
    }
    ?>

    <h3>Адрес</h3>

    <p>123456 Москва, Малый Американский переулок 21</p>

    <h3>Задайте вопрос</h3>

    <form action="" method="post">

        <p>
            <label>
                Ваше имя:
                <input type="text" name="name" />
            </label>
        </p>

        <p>
            <label>
                Ваш Email:
                <input type="text" name="email" />
            </label>
        </p>

        <p>
            <label>
                Ваш вопрос:
                <textarea name="message"></textarea>
            </label>
        </p>

        <input type="submit" value="Отправить" />

    </form>

    <p>
        Максимальный размер отправляемых данных <?= $size ?> байт.
    </p>

    <!-- Область основного контента -->

</div>

<div id="nav">

    <h2>Навигация по сайту</h2>

    <ul>
        <li><a href="index.php">Домой</a></li>
        <li><a href="about.php">О нас</a></li>
        <li><a href="contact.php">Контакты</a></li>
        <li><a href="table.php">Таблица умножения</a></li>
        <li><a href="calc.php">Калькулятор</a></li>
    </ul>

</div>

<div id="footer">
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
</div>

</body>
</html>
