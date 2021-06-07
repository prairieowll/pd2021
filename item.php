<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */
require_once 'php/connection.php';

$db = mysqli_connect($host, $user, $password, $database)
or die("Ошибка: " . mysqli_error($db));

$id = $_GET['id'];

$query = "SELECT * FROM goods WHERE id = $id";
$item = mysqli_fetch_assoc(mysqli_query($db, $query));

$query = "SELECT * FROM producers WHERE id =" . $item['producer_id'];
$result = mysqli_fetch_assoc(mysqli_query($db, $query));
$producer = $result['producer'];

mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы - NetSpace</title>
    <link rel="stylesheet" type="text/css" href="css/main.css?ver=1000">
    <link rel="stylesheet" type="text/css" href="css/item.css?ver=101">
    <link rel="icon" type="image/png" href="https://cdn1.iconfinder.com/data/icons/seo-icons-5/96/Coding-512.png">
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__inner flexbox">
                <div class="logo">
                    <span>ShopName</span>
                </div>
                <div class="menu">
                    <span></span>
                </div>
                <nav class="nav">
                    <a class="nav__links" href="index.html">Главная</a>
                    <a class="nav__links" href="catalog.html">Каталог</a>
                    <a class="nav__links" href="address.html">Адрес и контакты</a>
                    <a class="nav__links" href="cart.php"><img src="img/cart.png" alt=""></a>
                    <span class="nav__contacts">
                     <span>+7-999-888-77-66</span>
                     <span>support@ShopName.ru</span>
                  </span>
                </nav>
            </div>
        </div>
    </header>
    <div class="content">
        <section class="content-list">
            <div class="container">
                <div class="item__row">
                    <div class="item__img">
                        <?php echo '<img src="'.$item['img'].'" alt="">'?>
                    </div>
                    <div class="item__info info">
                        <div class="info__name"><?php echo $item['name']?></div>
                        <div class="info__price"><?php echo number_format($item['price'])?>&#8381</div>
                        <div class="info__char">Издатель: <span><?php echo $producer?></span></div>
                        <div class="info__description"><?php echo $item['description']?></div>
                        <div class="info__amount">
                            <?php
                            if ($item['amount'] > 0) {
                                echo '<span class="in">В наличии</span></div>';
                                echo '<div class="info__buy-btn info__cart-btn" id="'.$item['id'].'"><span>В корзину</span></div>';
                            }
                            else echo '<span class="out">Нет в наличии</span></div>';
                            ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__main flexbox">
                    <div class="contacts">
                        <ul>
                            <li>Контакты</li>
                            <li>+7-999-888-77-66 <span>(10:00 - 20:00 МСК)</span></li>
                            <li>support@netspace.ru</li>
                        </ul>
                    </div>
                    <div class="info_footer">
                        <ul>
                            <li>Информация</li>
                            <li><a class="nav__links" href="index.html">О нас</a></li>
                            <li><a class="nav__links" href="delivery.html">Доставка и оплата</a></li>
                            <li><a class="nav__links" href="admin.php">Администратору</a></li>
                        </ul>
                    </div>
                    <div class="mailing">
                        <form class="mailing__form" method="post">
                            <div class="mailing__label">Подпишитесь на рассылку</div>
                            <label>
                                <input type="email" name="email" class="mailing__input" placeholder="Ваш email"
                                       autocomplete="off" maxlength="70" required>
                            </label>
                            <div class="btn">
                                <button type="submit" class="mailing__btn">Подписаться</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="copyright">
                    <h4>ShopName <span>&#169</span> 2020</h4>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/setMailing.js"></script>
<script type="text/javascript" src="js/toCart.js?ver=1400"></script>
</body>

</html>