<?php
require_once('functions.php');
require_once ('data.php');
require_once ('init.php');
require_once ('mysql_helper.php');

$required = ['lot-name', 'category', 'message', 'lot-rate', 'lot-step', 'lot-date'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form = $_POST;
    if (isset($_FILES['files']['name'])) {
        $path = $_FILES['files']['name'];
        $result = move_uploaded_file($_FILES['files']['tmp_name'], 'uploads/' . $path);
    }
    $imgPath = 'uploads/'.$path;
    $sql = 'INSERT INTO lot (title,category,price,path,description) VALUES (?,?,?,?,?)';
    $stmt = db_get_prepare_stmt($link, $sql, [$form['lot-name'], $form['category'], $form['lot-step'],$imgPath, $form['message']]);
    $res = mysqli_stmt_execute($stmt);


}


$content_main = render_template('templates\add.php', [

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
