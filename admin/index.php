<?php
$connection= new mysqli('localhost','root','','doomla');
$sql = "SELECT * FROM pagecontent ORDER BY menuorder";
$result = $connection->query($sql);
$tableitems = $result->fetch_all(MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<h1><a href="create.php">Pagina toevoegen</a></h1>
<table>
<tr>
	<th>Pagina</th>
	<th>Inhoud</th>
	<th>Menu-optie</th>
	
</tr>


<?php
	foreach ($tableitems as $tableitem):
?>

<tr>
	<td><?php echo $tableitem['page'];?></td>
	<td><?php echo $tableitem['content'];?></td>
	<td><?php echo $tableitem['menuoption'];?></td>
	<td><?php echo $tableitem['menuorder'];?></td>
	<td><a href="edit.php?id=<?=$tableitem['id']?>">Wijzigen</a></td>
	<td><a href="delete.php?id=<?=$tableitem['id']?>">Verwijderen</a></td>
</tr>

<?php 
	endforeach;
?>

</table>

</body>
</html>