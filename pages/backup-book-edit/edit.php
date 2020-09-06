<?php
    include("../../config/autoload.php");

    $book_id = $_POST["book_id"];
    $book_name = $_POST["book_name"];
    $book_desc = $_POST["book_desc"];
    $book_auth = $_POST["book_auth"];

    $sql = "
        UPDATE book SET
            `book_name`='".$book_name."',
            `book_desc`='".$book_desc."',
            `book_auth`='".$book_auth."'
        WHERE book_id='".$book_id."'
    ";
    if( $DATABASE->Query($sql) ) {
        echo "แก้ไขแล้ว";
    } else {
        echo "แก้ไขไม่ได้";
    }
    