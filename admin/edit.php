<h1>Pagina wijzigen</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$tableitem['id']?>">
			<label for="name">type:</label>
			<input type="text" id="page" name="page" value="<?=$tableitem['page']?>">
		</div>
		
		
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>