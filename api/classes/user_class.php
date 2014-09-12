<?php
	require_once("mysql.php");
	require_once("database_class.php");

	class User{
		public function __construct($uid){
			$this->uid = $uid;
		}

		public function populateUserWithTable(){
			$getUserQuery = new Database();
			$result = $getUserQuery->fecthAllQuery("SELECT * FROM users WHERE uid = ?", array($this->uid));

			return $result;
		}		
	}
?>