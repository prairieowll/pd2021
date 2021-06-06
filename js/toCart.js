$('.info__buy-btn').on("click", function () {
    $.ajax({
        type: 'POST',
        url: 'php/toCart.php',
        data: {id: $('.info__buy-btn').attr('id')},
        success: function (data) {
            $('.info').children().removeClass('info__buy-btn');
        }
    });
    $('.info__cart-btn').html('<a href="../cart.php">Перейти к оплате</a>');
});

$('.cart__btn#0').on("click", function () {
    $.ajax({
        type: 'POST',
        url: 'php/toCart.php',
        data: {id: $(this).attr('id')},
        success: function (data) {
            location.reload();
        }
    });
});