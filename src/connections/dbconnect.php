<?php
function dbconnect($server,$username,$password) {
	$conn = mysql_connect($server,$username,$password);
	if(!$conn) {
		die('Could not connect to database: '.mysql_error());
	}
	return $conn;
}
dbconnect('localhost','root','');
mysql_select_db('testdb') or die('Database does not exist');
?>