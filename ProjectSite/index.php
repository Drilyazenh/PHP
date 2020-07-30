<?php
require_once ('data.php');
require_once ('functions.php');
$content_main = render_template('templates\index.php', [
    'adArr' => $adArr,

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

