<?php
    include("../../config/autoload.php");

    $book_id = $DATABASE->QueryMaxId("book", "book_id", "", 5);
    $book_name = $_POST["book_name"];
    $book_desc = $_POST["book_desc"];
    $book_auth = $_POST["book_auth"];

    $sql = "
        INSERT INTO book (
            `book_id`,
            `book_name`,
            `book_desc`,
            `book_auth`
        ) VALUES (
            '".$book_id."',
            '".$book_name."',
            '".$book_desc."',
            '".$book_auth."'
        )
    ";
    if( $DATABASE->Query($sql) ) {
        echo "บันทึกแล้ว";
    } else {
        echo "บันทึกไม่ได้";
    }
    