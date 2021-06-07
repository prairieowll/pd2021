<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */
require_once 'connection.php';
session_start();

if (isset($_POST['action']) && $_POST['action'] == 'exit') {
    $_SESSION['uid'] = [];
} else if ($_SESSION['uid'] == [] && !isset($_POST['login'], $_POST['password'])) {
    header('Location: auth.php');
} else {
    $db = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка: " . mysqli_error($db));

    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        if ($login != '' && $password != '') {
            $query = "SELECT * FROM admin WHERE login = '$login'";
            $user = mysqli_fetch_assoc(mysqli_query($db, $query));

            if (isset($user)) {
                if (md5($password) == $user['password']) $_SESSION['uid'] = $user['id'];
                else echo 'Введён неверный пароль';
            } else echo 'Пользователь с таким логином не найден';
        }
        else echo 'Пожалуйста, заполните все поля';
    }

    mysqli_close($db);
}

