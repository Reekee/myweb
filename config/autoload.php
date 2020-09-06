<?php
	session_start();
	date_default_timezone_set('Asia/Bangkok');
	include_once("class.database.php");
	define("host", "localhost");
	define("user", "root");
	define("pass", "");
	define("dbname", "db_myweb");
	$DATABASE = new Database(host, user, pass, dbname);

	if( isset($_SESSION["username"]) ) {
		$sql = "SELECT * FROM member WHERE username='".$_SESSION["username"]."' ";
		$rs = $DATABASE->QueryObj($sql);
		$MEMBER = $rs[0];
	} else {
		$MEMBER = null;
	}


	function LinkTo($url) {
		echo '
			<script>
				location.href = "'.$url.'";
			</script>
		';
		exit();
	}
	