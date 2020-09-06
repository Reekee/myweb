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
<a href="./?page=book-add" class="btn btn-success mb-3 mt-3"><i class="fas fa-plus"></i> เพิ่มหนังสือ</a>
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
                                <a class="btn btn-link text-warning" href="./?page=book-edit&book_id='.$row["book_id"].'">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-link text-danger btn-del" data-id="'.$row["book_id"].'">
                                    <i class="fas fa-trash"></i>
                                </button>
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



<div id="popup-confirm" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">คำยืนยัน ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>คุณแน่ใจต้องการลบใช่หรือไม่ ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                    ยกเลิก</button>
                <button type="button" class="btn btn-danger btn-confirm-del"><i class="fas fa-trash"></i> ตกลง</button>
            </div>
        </div>
    </div>
</div>