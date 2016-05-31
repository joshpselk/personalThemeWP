<html>
	<head>
		<title>
			<?php if( get_field( 'name', 'options' ) ) {
				the_field( 'name', 'options' );
			} ?>
		</title>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
		<div id="wrapper large-12 medium-12 small-12">
			<div class="row">
				<div id="header" class="large-12 medium-12 small-12">
					<?php if( get_field( 'logo', 'options' ) ) { ?>
						<div class="logoImage large-12 medium-12 small-12 columns">

							<?php 
							$image = get_field( 'logo', 'options' );
							$url = $image['url'];
							$alt = $image['alt']; 
							?>

							<img src="<?php echo $url; ?>" alt = "<?php echo $alt; ?>" />
						</div><!--logoImage-->
					<?php } ?>
					<div class="myName large-12 medium-12 small-12">
						<?php if( get_field( 'name', 'options' ) ) { ?>
							<h1>
								<?php the_field( 'name', 'options' ); ?>
							</h1>
						<?php } ?>
					</div>
					<h2>
						<?php if( get_field( 'title', 'options' ) ) {
							the_field( 'title', 'options' );
						} ?>
					</h2>
					<?php if( get_field('facebook', 'options') ||
						get_field('twitter', 'options') ||
						get_field('linkedin', 'options') ||
						get_field('github', 'options') ||
						get_field('email', 'options') ) { ?>
						<div class="socialIcons">
							<ul>
								<?php if( get_field('facebook', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $fbLink = get_field('facebook', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $fbLink)) { $fbLink = "http://" . $fbLink; } echo $fbLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/fb.png" alt="Like me on facebook" />
										</a>
									</li>
								<?php } if( get_field('twitter', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $twLink = get_field('twitter', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $twLink)) { $twLink = "http://" . $twLink; } echo $twLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/tw.png" alt="Follow me on twitter" />
										</a>
									</li>
								<?php } if( get_field('linkedin', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $liLink = get_field('linkedin', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $liLink)) { $liLink = "http://" . $liLink; } echo $liLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/in.png" alt="Follow me on LinkedIn" />
										</a>
									</li>
								<?php } if( get_field('github', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_blank" href="<?php $ghLink = get_field('github', 'options'); if (!preg_match("~^(?:f|ht)tps?://~i", $ghLink)) { $ghLink = "http://" . $ghLink; } echo $ghLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/gh.png" alt="Follow me on Github" />
										</a>
									</li>
								<?php } if( get_field('email', 'options') ) { ?>
									<li>
										<a class="socialIco" target="_top" href="<?php $mailLink = "mailto:" . get_field('email', 'options'); echo $mailLink; ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/mail.png" alt="Email me" />
										</a>
									</li>
								<?php } ?>
							</ul>
						</div><!--socialIcons-->
					<?php } ?>
				</div><!--header-->
			</div><!--row-->