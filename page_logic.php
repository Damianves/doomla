<?php
$page="home";
$connection= new mysqli('localhost','root','','doomla');
$sql="SELECT * From pagecontent WHERE page='" . $page . "'";
$result= $connection-> query($sql);
$content = $result->fetch_assoc();









function getContent($content){

	return $content['content'];
	
}
?>