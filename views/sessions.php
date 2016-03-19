<?php

	session_start();
	$id = $_SESSION["id"];

	if(empty($id) || $id == "")
	{
		session_destroy();
		header("location:../Index.php");
	}

	$code = isset($_REQUEST["code"]);

	if($code == 500)
	{
		session_destroy();
		header("location:../Index.php");
	}
?>