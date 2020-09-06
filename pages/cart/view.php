<?php
    $sql = "
        SELECT 
            * 
        FROM cart 
            INNER JOIN book ON book.book_id=cart.book_id
        WHERE member_id='".$MEMBER["member_id"]."'
    ";
    $rs = $DATABASE->QueryObj($sql);
?>
<link rel="stylesheet" href="pages/<?php echo $page; ?>/view.css">
<script src="pages/<?php echo $page; ?>/view.js"></script>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">รหัสหนังสือ</th>
            <th scope="col">ชื่อหนังสือ</th>
            <th scope="col">ผู้แต่ง</th>
            <th>จำนวน</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if( sizeof($rs)>0 ) {
                $count = 1;
                foreach($rs as $row) {
                    echo '
                        <tr>
                            <th scope="row">'.$count.'</th>
                            <td>'.$row["book_id"].'</td>
                            <td>'.$row["book_name"].'</td>
                            <td>'.$row["book_auth"].'</td>
                            <td>'.$row["qty"].'</td>
                        </tr>
                    ';
                    $count++;
                }
            } else {
                echo '
                    <tr>
                        <th colspan="5" class="text-center">ไม่พบข้อมูล</th>
                    </tr>
                ';
            }
        ?>
    </tbody>
</table>
<div class="text-right">
    <button class="btn btn-success btn-borrow"><i class="fas fa-check"></i> ยืนยันการยืมหนังสือ</button>
</div>
<?php

    echo $aaaa = date("Y-m-d H:i");

?>