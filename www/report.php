<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>Поиск пропавших котов - сценарий</title>
</head>
<body>

<h2>Сообщения о поиске моего кота</h2>

<?php

    $when = $_POST['when'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    
    echo 'Спасибо за заполнение формы.<br>';
    echo 'Кота похитили ' . $when . '<br>';
    echo 'Похитители: ' . $description . '<br>';
    echo 'Ваш email: ' . $email;

?>

</body>
</html>