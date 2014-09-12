<?php
	require_once("mysql.php");
	require_once("database_class.php");

	class User{
		public function __construct($uid){
			print_r($this->populateUserWithTable($uid));

		}

		public function populateUserWithTable($uid){
			$getUserQuery = new Database();
			$result = $getUserQuery->fecthAllQuery("SELECT * FROM users WHERE uid = ?", array($uid));

			return $result;
		}		
	}
?>