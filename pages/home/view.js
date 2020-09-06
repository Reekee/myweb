$(function() {
    $(".btn-add-cart").click(function() {
        var book_id = $(this).attr("data-id");
        $.post("pages/home/add-cart.php", {
            "book_id": book_id,
        }, function(rs) {
            location.reload();
        });
    });
});