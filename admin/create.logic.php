<?php 
	
	$connection= new mysqli('localhost','root','','doomla');
	echo $connection->connect_error;

$stmt = $connection->prepare("INSERT INTO pagecontent (page, menuoption, content) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $page, $menuoption, $content);


	$page=$_GET['page'];
	$menuoption=$_GET['menuoption'];
	$content=$_GET['content'];

	$stmt->execute();


	$connection->close();

?>

<?php

header("Location: ./");

?>