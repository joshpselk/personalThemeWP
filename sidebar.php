<div id="sidebar" class="large-12 medium-12 small-12">
	<div class="row">
		<div class="fullDescription left large-12 medium-12 small-12 columns">
			<h3>Bio</h3>
			<?php if( get_field( 'description', 'options' ) ) { ?>
				<div class=" bioDescription large-10 medium-12 small-12">
					<p>
						<?php the_field( 'description', 'options' ); ?>
					</p>
				</div>
			<?php } ?>
		</div>
	</div><!--row-->
</div>