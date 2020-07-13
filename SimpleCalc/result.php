<?php
require __DIR__.'/calc.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Результат</title>
</head>
<body>
<p>Результат выражения: <?="$number1$operator$number2 = $result"?></p>
<form action="/index.php" method="get">
    <input type="submit" value="Try again">
</form>
</body>
</html>
