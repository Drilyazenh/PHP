<?php
require_once ('data.php');
require_once ('functions.php');
require_once ('init.php');
require_once ('mysql_helper.php');

$search = $_GET['search'] ?? '';

$adArr = [];

$sql = "SELECT * FROM lot WHERE MATCH(title, description) AGAINST(?)";

$stmt = db_get_prepare_stmt($link, $sql, [$search]);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$adArr = mysqli_fetch_all($result, MYSQLI_ASSOC);

$content_main = render_template('templates\index.php', [
    'search'=>$search,
    'adArr' => $adArr

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
