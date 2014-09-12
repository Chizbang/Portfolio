<?php
	require_once("classes/database_class.php");
	echo "test";
	$getProjectsQuery = new Database();

	$result = $getProjectsQuery->fetchAllQuery("SELECT * FROM projects", array());

	echo json_encode($result);
?>