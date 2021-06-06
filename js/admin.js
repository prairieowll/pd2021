$('.option__btn#add').on("click", function () {
    $.ajax({
        type: 'POST',
        url: 'php/addItem.php',
        data: $('#add-form').serialize(),
        success: function (data) {
            if (data) alert(data)
            else location.reload();
        }
    });
});

$('.option__btn#delete').on("click", function () {
    if(confirm("Вы действительно хотите удалить этот товар?"))
    $.ajax({
        type: 'POST',
        url: 'php/deleteItem.php',
        data: $('#delete-form').serialize(),
        success: function (data) {
            if (data) alert(data)
            else location.reload();
        }
    });
});

$('.option__btn#add_prod').on("click", function () {
    $.ajax({
        type: 'POST',
        url: 'php/addProd.php',
        data: $('#add_prod-form').serialize(),
        success: function (data) {
            if (data) alert(data)
            else location.reload();
        }
    });
});