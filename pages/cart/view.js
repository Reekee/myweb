$(function() {
    $(".btn-borrow").click(function() {
        $.post("pages/cart/add-borrow.php", {

        }, function(rs) {
            location.reload();
        });
    });
});