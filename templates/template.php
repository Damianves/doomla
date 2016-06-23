<!DOCTYPE html>
<html>
<head>
	<title>Doomla</title>
	<link rel="stylesheet"  href="templates/"<?php echo $template;?>"">
</head>
<body>
	<section>
		<article>
			<?php echo  getContent($content);

			
			?>
			<nav>
			
				<?php echo getMenu($menu);?>

			
			</nav>
			
			
			
		</article>	
	</section>

</body>
</html>