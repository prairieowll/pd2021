$('.category-btn').on("click", function (e) {
    // e.preventDefault();
    $.ajax({
        type: 'GET',
        url: 'php/catalog.php',
        data: {category: $(this).attr('id')},
    });
});
