$('.auth__btn').on("click", function () {
    $.ajax({
        type: 'POST',
        url: 'php/auth.php',
        data: $('.auth-form').serialize(),
        success: function (data) {
            if (data) alert(data);
            else $(location).attr('href', 'admin.php');
        }
    });
});

$('.exit__btn').on("click", function () {
    $.ajax({
        type: 'POST',
        url: 'php/auth.php',
        data: {action: 'exit'},
        success: function (data) {
            $(location).attr('href', 'auth.php');
        }
    });
});