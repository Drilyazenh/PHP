<?php
require_once ('data.php');
require_once ('functions.php');
require_once ('init.php');
require_once ('mysql_helper.php');

$error=false;

if (!$link) {
    $error = mysqli_connect_error();
    print ("Ошибка");
} else{
    $sql = 'SELECT * FROM users';
    $result = mysqli_query($link, $sql);
    if ($result) {
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        print ("Ошибка");
        mysqli_error($link);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form = $_POST;

    foreach ($users as $user){
        if(($user['email'] === $form['email'])){
            $error = true;
            break;

        }
    }
    if($error == true){
        $error = 'Такой e-mail уже существует';
    } else {

        $sql = 'INSERT INTO users (name,email,password) VALUES (?,?,?)';
        $stmt = db_get_prepare_stmt($link, $sql, [$form['name'], $form['email'], $form['password']]);
        $res = mysqli_stmt_execute($stmt);
        $error = "Регистрация прошла успешно";

    }

}
$content_main = render_template('templates\registration.php', [
    'error'=>$error

]);


$layout = render_template('templates\layout.php', [
    'is_auth'=>$is_auth,
    'user_name'=>$user_name,
    'user_avatar'=>$user_avatar,
    'pageName'=>$pageName,
    'categories'=>$categories,
    'hideBlock'=>$hideBlock,
    'content_main'=>$content_main
]);
print ($layout);
?>
