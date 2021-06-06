<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */
require_once 'connection.php';

if ($_POST['producer'] != '') {
    $producer = $_POST['producer'];

    $db = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка: " . mysqli_error($db));

    $query = "INSERT INTO producers (id, producer) VALUES (NULL, '$producer')";
    mysqli_query($db, $query);

    mysqli_close($db);
} else echo "Пожалуйста, заполните все поля корректно";