<?php
    $book_id = $_GET["book_id"];

    $sql = "SELECT * FROM book WHERE book_id='".$book_id."' ";
    $rs = $DATABASE->QueryObj($sql);
    $data = $rs[0];
?>
<link rel="stylesheet" href="pages/<?php echo $page; ?>/view.css">
<script src="pages/<?php echo $page; ?>/view.js"></script>
<form id="formdata">
    <input type="hidden" id="book_id" value="<?php echo $data["book_id"]; ?>">
    <div class="form-group">
        <label for="book_name">ชื่อหนังสือ</label>
        <input type="text" class="form-control" id="book_name" value="<?php echo $data["book_name"]; ?>">
    </div>
    <div class="form-group">
        <label for="book_desc">รายละเอียดหนังสือ</label>
        <textarea class="form-control" id="book_desc" rows="5"><?php echo $data["book_desc"]; ?></textarea>
    </div>
    <div class="form-group">
        <label for="book_auth">ผู้แต่ง</label>
        <input type="text" class="form-control" id="book_auth" value="<?php echo $data["book_auth"]; ?>">
    </div>
    <button type="submit" class="btn btn-warning"><i class="fas fa-accessible-icon"></i> ยืนยันการแก้ไข</button>
</form>