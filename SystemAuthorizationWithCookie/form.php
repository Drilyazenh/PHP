<?php
require __DIR__."/logIn.php"
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form page</title>
</head>
<body>
<p><?=$error?></p>
<form action=/form.php method="post">
    <label for="login">Логин</label>
        <input type="text" name="login">
    <br>
    <label for="password">Пароль</label>
        <input type="password" name="password">
    <input type="submit" value="Войти">
</form>
</body>
</html>
