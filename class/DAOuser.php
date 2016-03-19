<?php

	require_once("User.php");
	require_once("Database.php");

	class DAOuser
	{
		public function Login($us)
		{
			$v1 = $us->get_email();
			$v2 = $us->get_password();
			$sql = "Select * from user where email = '" . $v1 . "' and psw = '" . $v2 . "'";
			$db = new Database;

			$res = $db->ejecutar($sql);
			$num = mysql_num_rows($res);

			if($num == 1)
			{
				session_start();

				while ($f = mysql_fetch_array($res)) 
				{
					$_SESSION["id"] = $f["id_user"];
				}

				header("location:../views/user_profile.php");
			}
			else
			{
				echo "Error";
			}

		}
	}

?>