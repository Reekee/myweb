$(function() {
    $(".btn-del").click(function() {

        if (confirm("คุณแน่ใจต้องการลบใช่หรือไม่ ?")) {
            var book_id = $(this).attr("data-id");
            $.post("pages/home/del.php", {
                "book_id": book_id,
            }, function(rs) {
                window.location.href = "./";
            });
        }


    });
});