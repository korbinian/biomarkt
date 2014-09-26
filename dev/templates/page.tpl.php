


<header class="site-header">
	<div class="row">
		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-banner">
			<img src="http://www.wasserburger-biomarkt.de/sites/all/themes/biomarkt/images/logos/biomarkt-logo.svg" alt="<?php print t('Home'); ?>" class="site-logo" />
		</a>
		<nav class="site-nav">
			<?php print render($page['navigation']); ?>
		</nav>
		<div class="site-search">
			<?php print render($page['search']); ?>
		</div>
	</div>
</header>
	
<main class="site-main">
	<div class="row">

		<div class="temp">

			<h2>breadcrumbs</h2>
			<?php print $breadcrumb; ?>

			<?php print render($title_prefix); ?>
    		<?php if ($title): ?>
      			<h1 class="page-title"><?php print $title; ?></h1>
    		<?php endif; ?>
    		<?php print render($title_suffix); ?>

    		<h2>tabs</h2>
			<?php print render($tabs); ?>

			<h2>messages</h2>
			<?php if ($messages): ?>
        		<?php print $messages; ?>
      		<?php endif; ?>
			
			<h2>help</h2>
      		<?php if ($page['help']): ?>
          		<?php print render($page['help']); ?>
      		<?php endif; ?>

			<h2>highlighted</h2>
			<?php if ($page['highlighted']): ?>
				<?php print render($page['highlighted']); ?>
			<?php endif; ?>

			<h2>content</h2>
			<?php print render($page['content']); ?>

			<h2>col-1</h2>
			<?php print render($page['sidebar_first']); ?>

			<h2>col-2</h2>
			<?php print render($page['sidebar_second']); ?>
			
			<h2>action links</h2>
			<?php if ($action_links): ?>
				<ul class="action-links">
					<?php print render($action_links); ?>
				</ul>
			<?php endif; ?>

		</div>

	</div>
</main>

<footer class="site-footer">
	<div class="row">
		<?php print render($page['footer']); ?>
	</div>
</footer>