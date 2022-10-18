<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--  -->
<!-- Как выполнить PHP -->
<!--  -->

<?php
    echo 'моя первая программа';
?>

<!-- Проблема с кодировками -->
<meta charset="utf-8">
<?php
    mb_internal_encoding('UTF-8');
    echo 'моя первая программа';
?>

<!-- Вывод ошибок PHP -->
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
?>


<!--  -->
<!-- Обзор начальных PHP команд -->
<!--  -->

<!-- Команда echo командует вывести что-нибудь на экран. -->
<?php
    echo 'hello';
?>
<?php
    echo 123;
?>

<!-- Комментарии -->
<?php
    echo 'hello'; // комментарий
?>

<?php
    /*
        комментарий
        комментарий
    */
    echo 'hello';
?>

<!-- Функция var_dump -->
<?php
    var_dump('12345'); // выведет '12345' и еще некоторую полезную инфу
?>

</body>
</html>