<?php

$connection= new mysqli('localhost','root','','doomla');

function getContent() {
	
	global $connection; 
	
	$page = isset($_GET['page']) ? $_GET['page'] : "home";
	$sql = "SELECT * FROM pagecontent WHERE page='$page'";
	$result = $connection->query($sql);
	$rows = $result->num_rows;

	if ($rows == 0) {
		return "<h1>Error</h1>"; //foutmelding
	}

	$content = $result->fetch_assoc();

	return $content['content'];
}

function getMenu(){
	global $connection;
	$sql="SELECT page, menuoption FROM pagecontent";
	$result= $connection-> query($sql);
	$menuitems = $result->fetch_all(MYSQLI_ASSOC);

	$menu = "<ul>";

	foreach ($menuitems as $menuitem) {
		$menu .= "<li><a href=\"index.php?page=" . $menuitem['page'] . "\">" . $menuitem['menuoption'] . "</a>";
	}

	$menu .= "</ul>";

	return $menu;
}