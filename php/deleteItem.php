<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */
require_once 'connection.php';

if ($_POST['id'] != '') {
    $id = $_POST['id'];

    $db = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка: " . mysqli_error($db));

    $query = "DELETE FROM goods WHERE id = $id";
    mysqli_query($db, $query);

    mysqli_close($db);
} else echo "Пожалуйста, заполните все поля корректно";
