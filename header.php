<html>
	<head><title>Celer Creo</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<?php if( get_field( 'logo', 'options' ) ) {

					$image = get_field( 'logo', 'options' );
					$url = $image['url'];
					$alt = $image['alt']; 
					?>

					<img src="<?php echo $url; ?>" alt = "<?php echo $alt; ?>" />

				<?php } ?>
				<h1>
					<?php if( get_field( 'name', 'options' ) ) {
						the_field( 'name', 'options' );
					} ?>
				</h1>
				<h2>
					<?php if( get_field( 'title', 'options' ) ) {
						the_field( 'title', 'options' );
					} ?>
				</h2>
				<?php if( get_field('facebook', 'options') ||
					get_field('twitter', 'options') ||
					get_field('linkedin', 'options') ||
					get_field('github', 'options')) { ?>
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
										<img src="<?php bloginfo('template_directory'); ?>/images/fb.png" alt="Follow me on twitter" />
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
							<?php } ?>
						</ul>
					</div>
				<?php } ?>
			</div>