<article class="node-<?php print $node->nid; ?> <?php print $classes; ?>"<?php print $attributes; ?>>
	<?php print render($content['field_teaserbild']); ?>	
	<h1<?php print $title_attributes; ?> class="page-title"><?php print $title; ?></h1>
	<?php print render($content['body']); ?>
</article>
