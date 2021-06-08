<?php
/**
 * @var array $row
 */
require_once 'php/toCart.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина - JoeStar</title>
    <link rel="stylesheet" type="text/css" href="css/main.css?ver=1000">
    <link rel="stylesheet" type="text/css" href="css/cart.css?ver=10">
    <link rel="icon" type="image/png"
          href="https://www.pngitem.com/pimgs/m/504-5048928_jojo-bizarre-adventure-symbol-hd-png-download.png">
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__inner flexbox">
                <div class="logo">
                    <span>JoeStar</span>
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
                     <span>support@joestar.ru</span>
                  </span>
                </nav>
            </div>
        </div>
    </header>
    <div class="content">
        <section class="intro">
            <div class="container">
                <div class="intro__title">
                    <h1>Корзина товаров</h1>
                </div>
            </div>
        </section>
        <section class="content-list">
            <div class="container">
                <div class="cart">
                    <div class="cart__row">
                        <div class="cart__item">Имя товара</div>
                        <div class="cart__amount">Кол-во</div>
                        <div class="cart__price">Цена</div>
                    </div>
                    <?php
                    if (isset($_SESSION['cart']) && $_SESSION['cart'] != []) {
                        $total = 0;
                        foreach ($_SESSION['cart'] as $item) {
                            echo '<div class="cart__row">';
                            echo '<div class="cart__item"><a href="item.php?id=' . $item['id'] . '">' . $item['name'] . '</a></div>';
                            echo '<div class="cart__amount">' . $item['quantity'] . '</div>';
                            echo '<div class="cart__price">' . number_format($item['price'] * $item['quantity']) . '&#8381</div>';
                            echo '</div>';
                            $total += $item['price'] * $item['quantity'];
                        }
                        echo '<div class="cart__row">';
                        echo '<div class="cart__total">Итого: ' . number_format($total) . '&#8381</div>';
                        echo '</div>';
                        echo '<div class="cart__row">';
                        echo '<div class="cart__btn" id="0">Очистить корзину</div>';
                        echo '<div class="cart__btn">Купить</div>';
                        echo '</div>';
                    } else echo '<div class="cart__row">Ваша корзина пуста</div>'
                    ?>
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
                            <li>support@joestar.ru</li>
                        </ul>
                    </div>
                    <div class="info">
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
                            <input type="email" name="email" class="mailing__input" placeholder="Ваш email"
                                   autocomplete="off" maxlength="70" required>
                            <div class="btn">
                                <button type="submit" class="mailing__btn">Подписаться</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="copyright">
                    <h4>JoeStar <span>&#169</span> 2020</h4>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/getCatalog.js?ver=10"></script>
<script type="text/javascript" src="js/setMailing.js"></script>
<script type="text/javascript" src="js/toCart.js?ver=15"></script>
</body>

</html>
