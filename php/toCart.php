<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */
require_once 'connection.php';
session_start();

$db = mysqli_connect($host, $user, $password, $database)
or die("Ошибка: " . mysqli_error($db));

$id = $_POST['id'];

if (isset($id)) {
    $query = "SELECT * FROM goods WHERE id = $id";
    $row = mysqli_fetch_assoc(mysqli_query($db, $query));

    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = $row;
        $_SESSION['cart'][$id]['quantity'] = 1;
    } else $_SESSION['cart'][$id]['quantity'] += 1;

    if ($id == 0) {
        $_SESSION['cart'] = [];
    }
}

mysqli_close($db);

