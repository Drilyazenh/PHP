<?php
require_once ('data.php');
require_once ('functions.php');
require_once ('init.php');
require_once ('mysql_helper.php');

$category='';

if (isset($_GET['categories'])) {
    $category = $_GET['categories'];
};

if (!$link) {
    $error = mysqli_connect_error();
    print ("Ошибка");
} else{
    $sql = 'SELECT * FROM lot WHERE category='.'"'.$category.'"';

    $result = mysqli_query($link, $sql);
    if ($result) {
        $adArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        print ("Ошибка");
        mysqli_error($link);
    }
}


$content_main = render_template('templates\all-lots.php', [
    'adArr' => $adArr,
    'category'=>$category


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
