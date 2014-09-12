<?php
	require_once("mysql.php");

	class Database{
		public function __construct(){
			$this->database = $GLOBALS['database'];
		}

		public function preparedQuery($query, $array){
			$prepQuery = $this->database->prepare($query);
			$result = $prepQuery-execute($array);

			return $result;
		}

		public function fecthAllQuery($query, $array){
			$fetchAllQuery = $this->database->prepare($query);
			$fetchAllQuery->execute($array);
			
			return $fetchAllQuery->fetchAll(PDO::FETCH_ASSOC);
		}

		public function deleteWhere($table, $where, $equalTo){
			$deleteWhereQuery = $this->database->prepare("DELETE FROM ". $table . " WHERE ". $where . " = ?");
			$deleteWhereQuery->execute(array($equalTo));
		}

		public function edit(){

		}
	}
?>