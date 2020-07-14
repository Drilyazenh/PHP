<?php
$dataBase = require __DIR__.'/DB.php';
$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';
for ($i = 0;$i<count($dataBase);$i++){
    if($dataBase[$i]['login'] == $login){
        if($dataBase[$i]['password'] ==$password){
            setcookie('login', $login, 0, '/');
            setcookie('password',$password, 0, '/');
            header("Location: http://myproject.loc/");
            exit;
        }

    }
}
if($login == '' && $password==''){
    $error = 'Введите логин и пароль';
} else {
    $error = 'Логин или пароль не верные';
}