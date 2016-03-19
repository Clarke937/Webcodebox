<?php

	require_once("../class/DAOuser.php");

	$v1 = $_POST["mail"];
	$v2 = $_POST["pass"];

	$us = new User;
	$dao = new DAOuser;

	$us->set_email($v1);
	$us->set_password($v2);
	
	$dao->Login($us);

?>