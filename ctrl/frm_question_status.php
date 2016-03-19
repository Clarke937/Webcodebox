<?php

	require_once("../class/Database.php");

	$id = $_GET["id"];
	echo $id;

	header("location:../views/forum.php?");

?>