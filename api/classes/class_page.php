<?php
	require_once("database_class.php");

	class Page{
		public function __consturct(){

		}

		public function getPageContent($page){
			$getPageContent = new Database();
			$result = $getPageContent->fecthAllQuery("SELECT * FROM content WHERE name = ?", array($page));
			
			return $result;
		}

		public function getPages(){
			$selectAllPagesQuery = new Database();
			$result = $selectAllPagesQuery->fecthAllQuery("SELECT * FROM pages", array());

			return $result;
		}

		public function getAllProjects(){
			$getProjectsQuery = new Database();
			$result = $getProjectsQuery->fecthAllQuery("SELECT * FROM projects", array());
			
			return $result;
		}


	}
?>