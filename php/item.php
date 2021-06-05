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

$id = $_GET['id'];

$query = "SELECT * FROM goods WHERE id = $id";
$item = mysqli_fetch_assoc(mysqli_query($db, $query));

$query = "SELECT * FROM producers WHERE id =" . $item['producer_id'];
$result = mysqli_fetch_assoc(mysqli_query($db, $query));
$producer = $result['producer'];

mysqli_close($db);