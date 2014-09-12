<?php
	require_once("classes/database_class.php");

	$selectAllPagesQuery = new Database();
	$result = $selectAllPagesQuery->fecthAllQuery("SELECT * FROM pages", array());
	echo json_encode($result);
?>