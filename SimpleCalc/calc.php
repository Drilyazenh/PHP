<?php
$number1 = !empty($_GET['Number1']) ? $_GET['Number1'] : 0;
$number2 = !empty($_GET['Number2']) ? $_GET['Number2'] : 0;
$operator = $_GET['operator'];
switch ($operator) {
    case '+':
        $result = $number1 + $number2;
        break;
    case '-':
        $result = $number1 - $number2;
        break;
    case '*':
        $result = $number1 * $number2;
        break;
    case '/':
        $result = $number1 / $number2;
        break;
}
?>