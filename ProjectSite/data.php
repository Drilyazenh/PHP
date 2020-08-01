<?php

require_once ('functions.php');
require_once ('init.php');
require_once ('mysql_helper.php');

$user_name = '';
$hideBlock = "visually-hidden";

if (isset($_COOKIE['name'])) {
    $is_auth = true;
    $user_name = $_COOKIE['name'];
    $hideBlock ="";
}
else {

    $is_auth = false;
}



$user_avatar = 'img/user.jpg';
$cookArr=[];

$pageName = 'Главная';

$name = "history";
$value="";
$expire = strtotime("+30 days");
$path = "/";
//Set ID
$id = null;
//Cookies for history and get ID for lot
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if(empty($_COOKIE["history"])){
        $value .= $id . " ";
    }
    if(!empty($_COOKIE["history"]) && strpos($_COOKIE["history"],$id. " ")===false){
    $value .= $id . " ";
};
};
if (isset($_COOKIE["history"])) {

        $value .=$_COOKIE["history"];

}
setcookie($name,$value, $expire, $path);

if (!$link) {
    $error = mysqli_connect_error();
    print ("Ошибка");
} else{
    $sql = 'SELECT * FROM lot';
    $sqlForCat = 'SELECT * FROM category';

    $result = mysqli_query($link, $sql);
    if ($result) {

        $adArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        print ("Ошибка");
        mysqli_error($link);
    }
}

$categories = ["Доски и лыжи","Крепления","Ботинки","Одежда","Инструменты","Разное"];
$categoriesClass  = ["boards","attachment","boots","clothing","tools","other"];


// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

