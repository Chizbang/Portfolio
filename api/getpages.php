<?php
	require_once("classes/class_page.php");

	$pages = new Page();
	$allPages = $pages->getPages();

	echo json_encode($allPages);
?>