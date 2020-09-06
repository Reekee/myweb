<link rel="stylesheet" href="pages/<?php echo $page; ?>/view.css">
<script src="pages/<?php echo $page; ?>/view.js"></script>
<form id="formdata">
    <div class="form-group">
        <label for="book_name">ชื่อหนังสือ</label>
        <input type="text" class="form-control" id="book_name">
    </div>
    <div class="form-group">
        <label for="book_desc">รายละเอียดหนังสือ</label>
        <textarea class="form-control" id="book_desc" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="book_auth">ผู้แต่ง</label>
        <input type="text" class="form-control" id="book_auth">
    </div>
    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> ยืนยันการเพิ่มข้อมูล</button>
</form>