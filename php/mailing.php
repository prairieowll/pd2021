<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */

require_once 'connection.php';

$db = mysqli_connect($host, $user, $password, $database)
or die("Ошибка: " . mysqli_error($db));

$email = $_POST['email'];
$query = "INSERT INTO mailing VALUES (NULL, '$email')";

$result = mysqli_query($db, $query);

if ($result)
    echo "Вы успешно подписались на рассылку";
else
    echo "Такой адрес почты уже подписан";

mysqli_close($db);
