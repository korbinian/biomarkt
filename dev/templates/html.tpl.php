<!DOCTYPE html>
<html>
	<head>
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
  		<?php print $scripts; ?>
  		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
		
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="http://www.wasserburger-biomarkt.de/sites/all/themes/biomarkt/scripts/gm.js"></script>
	</body>
</html>