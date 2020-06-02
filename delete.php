<?php
	include "db.php";
	$id = $_GET['id'];

	$sql = "DELETE FROM corretores.corretor where id = '$id'";

	$result = $db->query($sql);
	if($result == true) {
		echo "removed with succesfully";
		header("location: add.php");
	}else{
		echo "failed to remove";
	};

?>