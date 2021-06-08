<?php
/**
 * @var string $host
 * @var string $user
 * @var string $password
 * @var string $database
 */
require_once 'php/connection.php';
require_once 'php/auth.php';

$db = mysqli_connect($host, $user, $password, $database)
or die("Ошибка: " . mysqli_error($db));

$categories = mysqli_query($db, "SELECT * FROM categories");
$producers = mysqli_query($db, "SELECT * FROM producers");
$goods = mysqli_query($db, "SELECT * FROM goods");
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель - JoeStar</title>
    <link rel="stylesheet" type="text/css" href="css/main.css?ver=1000">
    <link rel="stylesheet" type="text/css" href="css/cart.css?ver=10">
    <link rel="stylesheet" type="text/css" href="css/auth.css?ver=1010">
    <link rel="stylesheet" type="text/css" href="css/admin.css?ver=1567">
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
                    <h1>Панель администратора</h1>
                </div>
            </div>
        </section>
        <section class="content-list">
            <div class="container">
                <div class="admin">
                    <div class="admin__row">
                        <div class="admin__title">Добавить товар</div>
                        <form class="admin__form form" id="add-form" method="post">
                            <div class="form__row">
                                <input type="text" name="name" maxlength="50" placeholder="Название">
                                <select name="category">
                                    <?php
                                    while ($category = mysqli_fetch_assoc($categories)) {
                                        echo '<option value="' . $category['id'] . '">';
                                        echo $category['category'];
                                        echo '</option>';
                                    }
                                    ?>
                                </select>
                                <select name="producer">
                                    <?php
                                    while ($producer = mysqli_fetch_assoc($producers)) {
                                        echo '<option value="' . $producer['id'] . '">';
                                        echo $producer['producer'];
                                        echo '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form__row">
                                <input type="number" name="price" maxlength="50" placeholder="Цена">
                                <input type="number" name="amount" maxlength="50" placeholder="Количество">
                            </div>
                            <div class="form__row">
                                <textarea name="description" cols="30" rows="10" placeholder="Описание"></textarea>
                            </div>
                            <div class="form__row">
                                <input type="text" name="img" placeholder="Ссылка на изображение">
                            </div>
                            <div class="form__row">
                                <div class="option__btn" id="add">Добавить</div>
                            </div>
                        </form>
                    </div>
                    <div class="admin__row">
                        <div class="admin__title">Удалить товар</div>
                        <form class="admin__form form" id="delete-form">
                            <div class="form__row">
                                <select name="id">
                                    <?php
                                    while ($item = mysqli_fetch_assoc($goods)) {
                                        echo '<option value="' . $item['id'] . '">';
                                        echo $item['name'];
                                        echo '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form__row">
                                <div class="option__btn" id="delete">Удалить</div>
                            </div>
                        </form>
                    </div>
                    <div class="admin__row">
                        <div class="admin__title">Добавить издателя</div>
                        <form class="admin__form form" id="add_prod-form">
                            <div class="form__row">
                                <input type="text" name="producer" maxlength="50" placeholder="Издатель">
                            </div>
                            <div class="form__row">
                                <div class="option__btn" id="add_prod">Добавить</div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="admin" id="exit">
                    <div class="admin__row">
                        <div class="exit__btn">Выйти</div>
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
<script type="text/javascript" src="js/auth.js?ver=15"></script>
<script type="text/javascript" src="js/admin.js?ver=123"></script>
</body>

</html>