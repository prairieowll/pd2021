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

$category = $_GET['category'];

if ($category == 0)
    $query = "SELECT * FROM goods";
else
    $query = "SELECT * FROM goods WHERE category_id = $category";

$result = mysqli_query($db, $query);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

mysqli_close($db);