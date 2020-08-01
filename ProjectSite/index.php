<?php
require_once ('data.php');
require_once ('functions.php');
require_once ('init.php');
require_once ('mysql_helper.php');

$content_main = render_template('templates\index.php', [
    'adArr' => $adArr,
    'categories'=>$categories,
    'categoriesClass'=>$categoriesClass

]);
$layout = render_template('templates\layout.php', [
'is_auth'=>$is_auth,
'user_name'=>$user_name,
'user_avatar'=>$user_avatar,
'pageName'=>$pageName,
'categories'=>$categories,
'hideBlock'=>$hideBlock,
'categoriesClass'=>$categoriesClass,
'content_main'=>$content_main
]);
print ($layout);

?>

