<?php
    include("../../config/autoload.php");

    $book_id = $_POST["book_id"];
    $cart_id = $DATABASE->QueryMaxId("cart", "cart_id");
    $member_id = $MEMBER["member_id"];

    $qty = 1;

    $sql = "SELECT * FROM cart WHERE member_id='".$member_id."' AND book_id='".$book_id."' ";
    $rs = $DATABASE->QueryObj($sql);
    if( sizeof($rs)==0 ) {
        $sql = "
            INSERT INTO `cart` (
                `cart_id`, 
                `book_id`, 
                `member_id`, 
                `qty`
            ) VALUES (
                '".$cart_id."',
                '".$book_id."',
                '".$member_id."',
                '".$qty."'
            )
        ";
        $DATABASE->Query($sql);
    } else {
        $sql = "
            UPDATE `cart` SET
                `qty`=`qty`+1
            WHERE member_id='".$member_id."' AND book_id='".$book_id."'
        ";
        $DATABASE->Query($sql);
    }
    