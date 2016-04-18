<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$tableitem = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','doomla');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * from pagecontent where id=$id";
			$result = $db->query($query);
		
			$tableitem = $result->fetch_assoc();		
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			$db = new mysqli('localhost','root','','doomla');
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "DELETE from pagecontent where id=$id";
			$result = $db->query($query);
		endif;
		
		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>