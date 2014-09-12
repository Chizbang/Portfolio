<?php
	if(!isset($_GET['page'])){
		return;
	}

	require_once("classes/database_class.php");

	$getPageContent = new Database();
	$result = $getPageContent->fecthAllQuery("SELECT * FROM content WHERE name = ?", array($_GET['page']));
	echo json_encode($result);

?>