<div style="margin-left: 100px;">
    <?php
        include("config/autoload.php");
        $sql = "SELECT * FROM member WHERE username='maru' AND password='maru123' ";
        $data = $DATABASE->QueryObj($sql);
        if( sizeof($data)==1 ) {
            echo "พบ";
        } 
    ?>
</div>