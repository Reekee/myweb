$(function() {
    var book_id;
    $(".btn-del").click(function() {
        $('#popup-confirm').modal('show');
        book_id = $(this).attr("data-id");
    });
    $(".btn-confirm-del").click(function() {
        $.post("pages/home/del.php", {
            "book_id": book_id,
        }, function(rs) {
            window.location.href = "./";
        });
    });
});