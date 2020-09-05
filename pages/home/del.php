<?php
    include("../../config/autoload.php");

    $book_id = $_POST["book_id"];

    $sql = "
        DELETE FROM book
        WHERE book_id='".$book_id."'
    ";
    if( $DATABASE->Query($sql) ) {
        echo "ลบแล้ว";
    } else {
        echo "ลบไม่ได้";
    }
    