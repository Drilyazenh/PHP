<?php
$is_auth = (bool) rand(0, 1);
$user_name = 'ilya';
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



$categories = ["Доски и лыжи","Крепления","Ботинки","Одежда","Инструменты","Разное"];
$adArr = [
    [
        'title'=>'2014 Rossignol District Snowboard',
        'category'=>$categories[0],
        'price'=>10999,
        'path'=>'img/lot-1.jpg'
    ],
    [
        'title'=>'DC Ply Mens 2016/2017 Snowboard',
        'category'=>$categories[0],
        'price'=>159999,
        'path'=>'img/lot-2.jpg'
    ],
    [
        'title'=>'Крепления Union Contact Pro 2015 года размер L/XL',
        'category'=>$categories[1],
        'price'=>8000,
        'path'=>'img/lot-3.jpg'
    ],
    [
        'title'=>'Ботинки для сноуборда DC Mutiny Charocal',
        'category'=>$categories[2],
        'price'=>10999,
        'path'=>'img/lot-4.jpg'
    ],
    [
        'title'=>'Куртка для сноуборда DC Mutiny Charocal',
        'category'=>$categories[3],
        'price'=>7500,
        'path'=>'img/lot-5.jpg'
    ],
    [
        'title'=>'Маска Oakley Canopy',
        'category'=>$categories[5],
        'price'=>5400,
        'path'=>'img/lot-6.jpg'
    ]
];


// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

