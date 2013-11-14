<?php
	include('../../connections/dbconnect.php');
	if(isset($_POST['newbranch'])) {
		$rows = mysql_num_rows(mysql_query('SELECT id FROM branch'));
		echo $rows;
		mysql_query('INSERT INTO branch(id,name) VALUES("'.($rows+1).'","'.$_POST['newbranch'].'")');
		mysql_query('INSERT INTO users(name,college,branch,phone,email) VALUES("'.$_POST['name'].'","'.$_POST['college'].'","'.($rows+1).'","+91-'.$_POST['phone'].'","'.$_POST['email'].'")');
		header('Location:registration-success.php');
	}
	else {
		if(isset($_POST['name'])) {
			mysql_query('INSERT INTO users(name,college,branch,phone,email) VALUES("'.$_POST['name'].'","'.$_POST['college'].'","'.$_POST['branch'].'","+91-'.$_POST['phone'].'","'.$_POST['email'].'")');
			header('Location:registration-success.php');
		}
		else
			header('Location:registration-error.php');
	}
?>