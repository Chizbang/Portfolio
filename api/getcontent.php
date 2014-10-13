<?php
	if(!isset($_GET['page'])){
		return;
	}

	require_once("classes/class_page.php");
	$page = new Page();

	$pageContent = $page->getPageContent($_GET['page']);

	echo json_encode($pageContent);

?>