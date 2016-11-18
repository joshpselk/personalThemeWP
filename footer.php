			<div class="row">
				<div id="footer" class="large-12 medium-12 small-12">
					<?php if( get_field('facebook', 'options') ||
						get_field('twitter', 'options') ||
						get_field('linkedin', 'options') ||
						get_field('github', 'options') ||
						get_field('email', 'options') ) { ?>
						<div class="socialIconFooter large-4 medium-12 small-12 columns">
							<ul>
								<?php if( get_field('facebook', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $fbOriginal = get_field('facebook', 'options'); $fbLink = get_field('facebook', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $fbLink)) { $fbLink = "http://" . $fbLink; } echo $fbLink; ?>">
											<ul>
												<li>
													<img src="<?php bloginfo('template_directory'); ?>/images/fb.png" alt="Like me on facebook" />
												</li>
												<li>
													<p>
														<?php echo $fbOriginal; ?>
													</p>
												</li>
											</ul>
										</a>
									</li>
								<?php } if( get_field('twitter', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $twOriginal = get_field('twitter', 'options'); $twLink = get_field('twitter', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $twLink)) { $twLink = "http://" . $twLink; } echo $twLink; ?>">
											<ul>
												<li>
													<img src="<?php bloginfo('template_directory'); ?>/images/tw.png" alt="Follow me on twitter" />
												</li>
												<li>
													<p>
														<?php echo $twOriginal; ?>
													</p>
												</li>
											</ul>
										</a>
									</li>
								<?php } if( get_field('linkedin', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $liOriginal = get_field('linkedin', 'options'); $liLink = get_field('linkedin', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $liLink)) { $liLink = "http://" . $liLink; } echo $liLink; ?>">
											<ul>
												<li>
													<img src="<?php bloginfo('template_directory'); ?>/images/in.png" alt="Follow me on LinkedIn" />
												</li>
												<li>
													<p>
														<?php echo $liOriginal; ?>
													</p>
												</li>
											</ul>
										</a>
									</li>
								<?php } if( get_field('github', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $ghOriginal = get_field('github', 'options'); $ghLink = get_field('github', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $ghLink)) { $ghLink = "http://" . $ghLink; } echo $ghLink; ?>">
											<ul>
												<li>
													<img src="<?php bloginfo('template_directory'); ?>/images/gh.png" alt="Follow me on Github" />
												</lil>
												<li>
													<p>
														<?php echo $ghOriginal; ?>
													</p>
												</li>
											</ul>
										</a>
									</li>
								<?php } if( get_field('email', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_top" href="<?php $mailOriginal = get_field('email', 'options'); $mailLink = "mailto:" . get_field('email', 'options'); echo $mailLink; ?>">
											<ul>
												<li>
													<img src="<?php bloginfo('template_directory'); ?>/images/mail.png" alt="Email me" />
												</li>
												<li>
													<p>
														<?php echo $mailOriginal; ?>
													</p>
												</li>
											</ul>
										</a>
									</li>
								<?php } ?>
							</ul>
						</div>
					<?php } ?>
				</div><!--footer-->
			</div><!--row-->
		</div>
	</body>
</html>