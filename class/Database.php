<?php

	class Database
	{
		private $_conexion;

		public function __construct()
		{
			$Host = "localhost";
			$Usuario = "root";
			$Pass = "";
			$BD = "webcodebox";

			$this->_conexion = mysql_connect($Host,$Usuario,$Pass);
			mysql_select_db($BD,$this->_conexion);

		}

		public function getConexion()
		{
			return $_conexion;
		}

		public function setConexion($_conexion)
		{
			$this->_conexion = $_conexion;
		}

		public function ejecutar($sql)
		{
			$res = mysql_query($sql,$this->_conexion);
			return $res;
		}

		public function cerrarconexion()
		{
			mysql_close($this->_conexion);
		}

		public function __destruct()
		{
			//Destructor de la clase Database
		}
	}

?>