$(function() {
    $("#formdata").submit(function(e) {
        e.preventDefault();
        $.post("pages/book-add/add.php", {
            "book_name": $("#book_name").val(),
            "book_desc": $("#book_desc").val(),
            "book_auth": $("#book_auth").val(),
        }, function(rs) {
            window.location.href = "./";
        });
    });
});