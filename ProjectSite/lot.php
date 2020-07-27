<?php
require_once('functions.php');
require_once ('data.php');

$id = null;


if (isset($_GET['id'])) {
        $id = $_GET['id'];
};



$content_main = render_template('templates\lot.php', [
    'adArr' => $adArr,
    'id' => $id,


]);

$layout = render_template('templates\layout.php', [
    'is_auth'=>$is_auth,
    'user_name'=>$user_name,
    'user_avatar'=>$user_avatar,
    'pageName'=>$pageName,
    'categories'=>$categories,
    'content_main'=>$content_main
]);
print ($layout);
?>


