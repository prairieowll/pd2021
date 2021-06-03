let input = $('input[name=email]')

$('.mailing__form').on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'php/mailing.php',
        data: {email: input.val()},
        success: function (response) {
            input.val('');
            alert(response);
        },
    });
});
