<?php
$pictures = require __DIR__."/findpictures.php";
$dataBase = require __DIR__ . '/DB.php';
$login = $_COOKIE['login'];
for ($i = 0;$i<count($dataBase);$i++) {
    if ($dataBase[$i]['login'] == $login) {
        $user = true;
        break;
    } else {
        $user = false;
    }
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site page</title>
</head>
<body>
<?php if ($user === true): ?>
<p>Здравствуйте, <?=$login?></p>
<p><a href=/logOut.php>Выйти</a></p>
<p><a href=/upload.php>Загрузить файл</a></p>
<?php elseif ($user === false): ?>
<a href=/form.php>Авторизация</a>
<?php endif; ?>
<p>Галерея пользователей:</p>
<?php if (count($pictures) > 0): ?>
<ul>
    <?php foreach ($pictures as $picture):?>
        <li><img src="<?=$picture;?>" alt=""></li>
    <?php endforeach; ?>
</ul>
<?php elseif (count($pictures) == 0): ?>
<p>В галереи пока нет картинок</p>
<?php endif; ?>
</body>
</html>