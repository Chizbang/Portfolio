<?php
	require_once("classes/database_class.php");
	$getProjectsQuery = new Database();

	$result = $getProjectsQuery->fecthAllQuery("SELECT * FROM projects", array());

	echo json_encode($result);
?>