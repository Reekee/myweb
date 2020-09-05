<?php
    $sql = "SELECT * FROM book ORDER BY book_id DESC";
    $rs = $DATABASE->QueryObj($sql);
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">รหัสหนังสือ</th>
            <th scope="col">ชื่อหนังสือ</th>
            <th scope="col">ผู้แต่ง</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $count = 1;
            foreach($rs as $row) {
                echo '
                    <tr>
                        <th scope="row">'.$count.'</th>
                        <td>'.$row["book_id"].'</td>
                        <td>'.$row["book_name"].'</td>
                        <td>'.$row["book_auth"].'</td>
                    </tr>
                ';
                $count++;
            }
        ?>
    </tbody>
</table>