<?php
	require_once "delete_logic.php";
	
?>

<h1>Pagina verwijderen </h1>
	<p>Weet u zeker dat u onderstaanda pagina wilt verwijderen:</p>
	<form method="post">
	
	<input type="submit" name="confirmed" value="Yes">
	<input type="submit" name="canceled" value="No">
		
		<div>
			<input type="hidden" name="id" value="<?=$tableitem['id']?>">
			<label for="name">Pagina:</label>
			<span><?=$tableitem['page']?></span>
		</div>
		<div>
			
			<label for="name">menu-optie:</label>
			<span><?=$tableitem['menuoption']?></span>
		</div>
		<div class="content">
			
			<label for="name">inhoud:</label>
			<span><?=$tableitem['content']?></span>
		</div>
		
			
			
	</form>