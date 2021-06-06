<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */
require_once 'connection.php';

if ($_POST['name'] != '' && $_POST['category'] != '' && $_POST['producer']!= '' && $_POST['price'] != '' && $_POST['amount'] != '' &&  $_POST['description'] != '' && $_POST['img']) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $producer = $_POST['producer'];
    $price = (int)$_POST['price'];
    $amount = (int)$_POST['amount'];
    $description = $_POST['description'];
    $img = $_POST['img'];

    $db = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка: " . mysqli_error($db));

    $query = "INSERT INTO goods (id, name, category_id, producer_id, price, amount, description, img) VALUES (NULL, '$name', $category, $producer, $price, $amount, '$description', '$img')";
    mysqli_query($db, $query);

    mysqli_close($db);
} else echo "Пожалуйста, заполните все поля корректно";