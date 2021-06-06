<?php
require_once 'php/auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы - NetSpace</title>
    <link rel="stylesheet" type="text/css" href="css/main.css?ver=1000">
    <link rel="stylesheet" type="text/css" href="css/cart.css?ver=10">
    <link rel="stylesheet" type="text/css" href="css/auth.css?ver=1310">
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
                    <a class="nav__links" href="#">Адрес и контакты</a>
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
        <section class="intro">
            <div class="container">
                <div class="intro__title">
                    <h1>Авторизация</h1>
                </div>
            </div>
        </section>
        <section class="content-list">
            <div class="container">
                <div class="auth">
                    <form class="auth__form auth-form" method="post">
                        <div class="auth-form__row">
                            <input type="text" maxlength="50" name="login" placeholder="Логин">
                        </div>
                        <div class="auth-form__row">
                            <input type="password" maxlength="50" name="password" placeholder="Пароль">
                        </div>
                        <div class="auth-form__row">
                            <div class="auth__btn">Войти</div>
                        </div>
                    </form>
                    <div class="note">Логин - admin, пароль - admin</div>
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
                    <div class="info">
                        <ul>
                            <li>Информация</li>
                            <li><a class="nav__links" href="index.html#about">О нас</a></li>
                            <li><a class="nav__links" href="">FAQ</a></li>
                            <li><a class="nav__links" href="#">Доставка и оплата</a></li>
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
                    <h4>ShopName <span>&#169</span> 2020</h4>
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
<script type="text/javascript" src="js/auth.js?ver=1512"></script>
</body>

</html>