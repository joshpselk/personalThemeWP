			<div class="row">
				<div id="footer" class="large-12 medium-12 small-12">
					<h1>FOOTER</h1>
					<?php if( get_field('facebook', 'options') ||
						get_field('twitter', 'options') ||
						get_field('linkedin', 'options') ||
						get_field('github', 'options') ||
						get_field('email', 'options') ) { ?>
						<div class="socialIconFooter">
							<ul>
								<?php if( get_field('facebook', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $fbOriginal = get_field('facebook', 'options'); $fbLink = get_field('facebook', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $fbLink)) { $fbLink = "http://" . $fbLink; } echo $fbLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/fb.png" alt="Like me on facebook" />
											<div class="socialData">
												<?php echo $fbOriginal; ?>
											</div><!--socialData-->
										</a>
									</li>
								<?php } if( get_field('twitter', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $twOriginal = get_field('twitter', 'options'); $twLink = get_field('twitter', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $twLink)) { $twLink = "http://" . $twLink; } echo $twLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/tw.png" alt="Follow me on twitter" />
											<div class="socialData">
												<?php echo $twOriginal; ?>
											</div><!--socialData-->
										</a>
									</li>
								<?php } if( get_field('linkedin', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $liOriginal = get_field('linkedin', 'options'); $liLink = get_field('linkedin', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $liLink)) { $liLink = "http://" . $liLink; } echo $liLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/in.png" alt="Follow me on LinkedIn" />
											<div class="socialData">
												<?php echo $liOriginal; ?>
											</div><!--socialData-->
										</a>
									</li>
								<?php } if( get_field('github', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $ghOriginal = get_field('github', 'options'); $ghLink = get_field('github', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $ghLink)) { $ghLink = "http://" . $ghLink; } echo $ghLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/gh.png" alt="Follow me on Github" />
											<div class="socialData">
												<?php echo $ghOriginal; ?>
											</div><!--socialData-->
										</a>
									</li>
								<?php } if( get_field('email', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_top" href="<?php $mailOriginal = get_field('email', 'options'); $mailLink = "mailto:" . get_field('email', 'options'); echo $mailLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/mail.png" alt="Email me" />
											<div class="socialData">
												<?php echo $mailOriginal; ?>
											</div><!--socialData-->
										</a>
									</li>
								<?php } ?>
							</ul>
						</div>
					<?php } ?>
					<?php if( get_field( 'submission_form', 'options' ) ) { 
						$formCode = get_field( 'submission_form', 'options' ); ?>
						<div>
							<?php echo do_shortcode( $formCode ); ?>
						</div>
					<?php } ?>
				</div><!--footer-->
			</div><!--row-->
		</div>
	</body>
</html>