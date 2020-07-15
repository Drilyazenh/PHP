<?php
$arrayFiles = scandir(__DIR__ . '/uploads');
$arrayPictures =[];
foreach ($arrayFiles as $file){
    if($file === '.' || $file === '..') {
        continue;
    } else {
        $arrayPictures[]='http://myproject.loc/uploads/'.$file;
    }
}
return $arrayPictures;