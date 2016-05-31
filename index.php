<?php get_header(); ?>
<div id="main">
	<div class="row">
		<div id="content" class="large-12 medium-12 small-12">
			<?php if( get_field( 'gallery_shortcode', 'options' ) ) { 
				$portfolioCode = get_field( 'gallery_shortcode', 'options' ); ?>
				<div>
					<?php echo do_shortcode( $portfolioCode ); ?>
				</div>
			<?php } ?>
		</div><!--content-->
	</div><!--row-->
	<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>