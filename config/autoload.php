<?php
	date_default_timezone_set('Asia/Bangkok');
	include_once("class.database.php");
	define("host", "localhost");
	define("user", "root");
	define("pass", "");
	define("dbname", "db_myweb");
	$DATABASE = new Database(host, user, pass, dbname);
	