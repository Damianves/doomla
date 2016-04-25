<?php
require_once "edit_logic.php";
?>

<h1>Pagina wijzigen</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$tableitem['id']?>">
			<label for="Pagina">Pagina:</label>
			<input type="text" id="page" name="page" value="<?=$tableitem['page']?>">
		</div>
		<div>
			
			<label for="Menu-optie">Menu-optie:</label>
			<input type="text" id="menuoption" name="menuoption" value="<?=$tableitem['menuoption']?>">
		</div>
		<div>
			<label for="menuorder">volgorde</label>
			<input type="number" name="menuorder" value="<?=$tableitem['menuorder']?>">
		</div>
		<div>
			
			<label for="Menu-optie">Inhoud:</label>
			<input type="text" id="content" name="content" value="<?=$tableitem['content']?>">
		</div>
		
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
		<div>
			<h1><a href="http://localhost/doomla/admin/index.php">anuleren</a></h1>
		</div>
	</form>