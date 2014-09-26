


<header class="site-header">
	<div class="row">

		<img src="http://www.wasserburger-biomarkt.de/sites/all/themes/biomarkt/images/logos/biomarkt-logo.svg" alt="<?php print t('Home'); ?>" class="site-logo" />

		<nav class="site-nav">
			<?php print render($page['navigation']); ?>
		</nav>
		<div class="site-search">
			<?php print render($page['search']); ?>
		</div>
	</div>
</header>
	
<div class="site-main">
	<div class="row">

		<main class="site-content">

			<?php if ($page['highlighted']): ?>
				<?php print render($page['highlighted']); ?>
			<?php endif; ?>

			<?php print render($page['content']); ?>

			<?php print $feed_icons; ?> 

			<?php if ($action_links): ?>
			<ul class="action-links">
				<?php print render($action_links); ?>
			</ul>
			<?php endif; ?>

			<?php if ($messages): ?>
				<?php print $messages; ?>
			<?php endif; ?>

			<?php if ($page['help']): ?>
				<?php print render($page['help']); ?>
			<?php endif; ?>

			<?php print render($tabs); ?>
			
		</main>

		<?php if ($page['sidebar_first']): ?>
			<aside class="sidebar_first">
				<?php print render($page['sidebar_first']); ?>
			</aside>
		<?php endif; ?>

		<?php if ($page['sidebar_second']): ?>
			<aside class="sidebar_second">
				<?php print render($page['sidebar_second']); ?>
			</aside>
		<?php endif; ?>

	</div>
</div>

<footer class="site-footer">
	<div class="row">
		<?php print render($page['footer']); ?>
	</div>
</footer>