<?php
$dataBase = require __DIR__ . '/DB.php';
$login = $_COOKIE['login'];
for ($i = 0;$i<count($dataBase);$i++) {
    if ($dataBase[$i]['login'] == $login) {
        $user = "<p>Здравствуйте, $login</p><p><a href=/logOut.php>Выйти</a></p>";
        break;
    } else {
        $user = "<a href=/form.php>Авторизация</a>";
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
<?=$user?>
</body>
</html>