$('.category-btn').on("click", function () {
    $.ajax({
        type: 'GET',
        url: 'php/catalog.php',
        data: {category: $(this).attr('id')},
        success: function (data) {
            $('.content-list__row').html(data);
        }
    });
    $(this).addClass('active-btn').siblings().removeClass('active-btn');
});

$(document).ready(function () {
    $.ajax({
        type: 'GET',
        url: 'php/catalog.php',
        data: {category: 0},
        success: function (data) {
            $('.content-list__row').html(data);
        }
    });
});