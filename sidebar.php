<div id="sidebar" class="large-12 medium-12 small-12">
	<div class="row">
		<div class="fullDescription left large-12 medium-12 small-12">
			<h3>Bio</h3>
			<?php if( get_field( 'description', 'options' ) ) { ?>
				<p>
					<?php the_field( 'description', 'options' ); ?>
				</p>
			<?php } ?>
		</div>
	</div><!--row-->
</div>