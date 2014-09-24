<!DOCTYPE html>
<html>
	<head>
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
  		<?php print $scripts; ?>
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		
		<?php 
			print $page_top;
			print $page;
			print $page_bottom; 
		?>

	</body>
</html>