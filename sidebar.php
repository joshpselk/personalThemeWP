<div id="sidebar" class="large-12 medium-12 small-12">
	<h2><?php _e('Categories'); ?></h2>
	<ul>
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
	</ul>
	<h2><?php _e('Archives'); ?></h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>