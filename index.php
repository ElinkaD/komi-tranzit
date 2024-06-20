<!DOCTYPE html>
<html lang="ru">

<head>
	<title>ООО Коми Транзит</title>
	<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/header.css" />
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <?php
    // Определение массива сопоставлений страниц и их названий
    $map = [
        'main_page' => 'ГЛАВНАЯ',
        'company_page' => 'КОМПАНИЯ',
        'services_page' => 'УСЛУГИ',
        'contacts_page' => 'КОНТАКТЫ',
        'rewiew_page' => 'ОТЗЫВЫ',
        'faq_page' => 'ВОПРОСЫ',
        'service01' => 'УСЛУГА1',
        'service02' => 'УСЛУГА2',
        'service03' => 'УСЛУГА3'
    ];

    // Получение значения параметра 'page' из URL и его очистка
    $page = trim($_GET['page'] ?? '');

    // Проверка, пуста ли страница или отсутствует в массиве $map
    if (empty($page) || !array_key_exists($page, $map)) {
        header('Location: index.php?page=main_page');
        exit();
    }

    echo '<nav class="top-menu">';
    echo '<a class="navbar-logo" href="index.php"><img src="img/svg/logo.svg" alt="Логотип ООО Коми Транзит"></a>';
    echo '<ul class="menu-main">';

    // Генерация HTML-кода меню
    echo '<ul class="menu">';
    foreach ($map as $key => $item) {
        if ($key == 'main_page' || $key == 'service01' || $key == 'service02' || $key == 'service03') {
            continue; // Пропускаем элемент с ключом 'main'
        }
        $class = ($page == $key) ? 'class="active"' : '';
        echo "<li><a href=\"?page=$key\" $class>$item</a></li>";
    }
    echo '</ul>';
    echo '</nav>';
    include '' . $page . '.php';
    ?>

    <?php 
    require 'footer.php';
    echo '<link rel="stylesheet" href="css/footer.css">'; 
    ?>
</body>
</html>

