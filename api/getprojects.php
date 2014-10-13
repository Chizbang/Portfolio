<?php
	require_once("classes/class_page.php");
	$projects = new Page();
	$allProjects = $projects->getAllProjects();

	echo json_encode($allProjects);
?>