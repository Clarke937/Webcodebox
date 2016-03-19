<?php

	class User
	{
		private $_id;
		private $_nickname;
		private $_email;
		private $_password;
		private $_photo;
		private $_conexion;

		public function __construct(){}

		public function get_id()
		{
			return $this->_id;
		}

		public function get_nickname()
		{
			return $this->_nickname;
		}

		public function get_email()
		{
			return $this->_email;
		}

		public function get_password()
		{
			return $this->_password;
		}

		public function get_photo()
		{
			return $this->_photo;
		}

		public function get_conexion()
		{
			return $this->_conexion;
		}

		// ->Setters<-

		public function set_id($x)
		{
			$this->_id = $x;
		}

		public function set_nickname($x)
		{
			$this->_nickname = $x;
		}

		public function set_email($x)
		{
			$this->_email = $x;
		}

		public function set_password($x)
		{
			$this->_password = $x;
		}

		public function set_photo($x)
		{
			$this->_photo = $x;
		}

		public function set_conexion($x)
		{
			$this->_conexion = $x;
		}

	}

?>