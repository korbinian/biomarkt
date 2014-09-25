


<header class="site-header">
	<div class="row">
		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-banner">
			<img src="http://www.wasserburger-biomarkt.de/sites/all/themes/biomarkt/images/logos/biomarkt-logo.svg" alt="<?php print t('Home'); ?>" class="site-logo" />
		</a>
		<nav class="site-nav">
			<?php print render($page['navigation']); ?>
		</nav>
		<?php print render($page['search']); ?>
	</div>
</header>
	
<main class="site-main">
	<div class="row">
		
		<div class="col-1">
			<?php print render($page['col-1']); ?>
		</div>

		<div class="col-2">
			<?php print render($page['col-2']); ?>	
		</div>

		<div class="meta col-full">
			<?php print render($tabs); ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?>
			<ul><?php print render($action_links); ?></ul>
			<?php endif; ?>
			<?php print $feed_icons; ?> 
			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
			<h1><?php print $title; ?></h1>
			<?php endif; ?>
			<?php print render($title_suffix); ?>
			<?php print render($page['highlighted']); ?>
			<?php print $breadcrumb; ?>
			<?php print $messages; ?>
			<?php print render($page['content']); ?>	
		</div>

	</div>
</main>

<footer class="site-footer">
	<div class="row">
		<p>
			<b>Wasserburger Biomarkt</b> | <a href="http://wasserburger-biomarkt.de/node/98">Impressum</a>
			<span class="nowrap"><br><i class="fa fa-map-marker"></i> <b>Adresse</b> Bahnhofsplatz 5 83512 Wasserburg am Inn &bullet;</span>
			<span class="nowrap"><i class="fa fa-phone"></i> <b>Tel</b> 08071 922 56 52 &bullet;</span>
			<span class="nowrap"><i class="fa fa-fax"></i> <b>Fax</b> 08071 922 56 53 &bullet;</span>
			<span class="nowrap"><i class="fa fa-envelope"></i> <b>E-Mail</b> <a href="mailto:mail@wasserburger-biomarkt.de">mail@wasserburger-biomarkt.de</a></span>
		</p>
	</div>
</footer>