<?php
require_once('functions.php');
require_once ('data.php');
$required = ['lot-name', 'category', 'message', 'lot-rate', 'lot-step', 'lot-date'];
$error='';
$flag = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gif = $_POST;

    $errors = [];
    foreach ($required as $key) {
        if (empty($_POST[$key])) {
            $flag = true;
            $error = 'form__item--invalid';
        }
    }
}
if (!empty($_FILES['file'])) {
    $file = $_FILES['file'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла.';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'project/uploads/' . $srcFileName;
    }
}

$content_main = render_template('templates\add.php', []);

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
