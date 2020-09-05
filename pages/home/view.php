<?php
    $search = @$_GET["search"];
    

    $condition = "";
    if($search=="") {
        $condition = "";
    } else {
        $condition = " 
            WHERE book_id='".$search."' 
                OR book_name LIKE '%".$search."%'
                OR book_auth LIKE '%".$search."%'
        ";
    }


    $sql = "
        SELECT * 
        FROM book 
        ".$condition."
        ORDER BY book_id DESC
    ";
    $rs = $DATABASE->QueryObj($sql);
?>
<link rel="stylesheet" href="pages/<?php echo $page; ?>/view.css">
<script src="pages/<?php echo $page; ?>/view.js"></script>
<a href="./?page=book-add" class="btn btn-success mb-3 mt-3">เพิ่มหนังสือ</a>
<form action="" method="get" class="mb-4">
    <input type="text" class="form-control" name="search" value="<?php echo $search; ?>" placeholder="ค้นหา">
    <small class="form-text text-muted">ค้นหาข้อมูลหนังสือ โดยกรอก รหัสหนังสือ หรือชื่อ หรือผู้แต่ง
        อย่างใดอย่างหนึ่ง</small>
</form>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">รหัสหนังสือ</th>
            <th scope="col">ชื่อหนังสือ</th>
            <th scope="col">ผู้แต่ง</th>
            <th></th>
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
                            <td>
                                <a class="btn btn-link" href="./?page=book-edit&book_id='.$row["book_id"].'">แก้ไข</a>
                                <button class="btn btn-link btn-del" data-id="'.$row["book_id"].'">ลบ</button>
                            </td>
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