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
		$db = new mysqli('localhost','root','','doomla');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$page = $db->escape_string($_POST["page"]);
		$menuoption = $db->escape_string($_POST["menuoption"]);
		$content = $db->escape_string($_POST["content"]);

		
		
		// Prepare query and execute
		$query = "UPDATE pagecontent set page='$page', menuoption='$menuoption', content='$content' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>