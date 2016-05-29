<html>
	<head><title>Celer Creo</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<?php if( get_field( 'logo', 'options' ) ) {


					$image = get_field( 'logo', 'options' );
					$url = $image['sizes']['medium'];
					$alt = $image['alt']; ?>

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
			</div>