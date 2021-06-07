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
    $query = "SELECT * FROM goods ORDER BY name";
else
    $query = "SELECT * FROM goods WHERE category_id = $category ORDER BY name";

$result = mysqli_query($db, $query) or die("Ошибка: " . mysqli_error($db));
while ($item = mysqli_fetch_assoc($result)) {
    echo '<div class="content-list__column">';
    echo '<div class="content-list__item item">';
    echo '<div class="item__img"><a href="../item.php?id='.$item['id'].'"><img src="'.$item['img'].'" alt=""></a></div>';
    echo '<div class="item__title"><a href="../item.php?id='.$item['id'].'">'.$item['name'].'</a></div>';
    echo '<div class="item__price">'.number_format($item['price']).'&#8381</div>';
    if ($item['amount'] > 0)
        echo '<div class="item__buy-btn"><a href="../item.php?id='.$item['id'].'">Купить</a></div>';
    else echo '<div class="item__amount-out">Нет в наличии</div>';
    echo '</div></div>';
}

mysqli_close($db);