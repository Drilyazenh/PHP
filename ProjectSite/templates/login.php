<?php
require_once ('data.php');
require_once ('functions.php');
require_once ('userdata.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form = $_POST;

    foreach ($users as $user){
    if(($user['email'] === $form['email']) && ($user['password'] === $form['password'])){
        setcookie('name', $user['name'], 0, '/');


        $_SESSION['user'] = $user['name'];
        header("Location: index.php");
        break;
    }
    }
}

$content_main = render_template('templates\login.php', [


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
