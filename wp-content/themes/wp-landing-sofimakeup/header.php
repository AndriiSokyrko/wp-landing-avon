<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>


<body style="margin: 0px;">
<header>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
				        data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://wp-landing-iftemplar/"><img class="logo_full"
				                                                              src="<?php echo get_template_directory_uri()?>/image/logo.png"
				                                                              alt="sofimakeup"><img class="logo_small"
				                                                                                    src="<?php echo get_template_directory_uri()?>/image/logo_small.png"
				                                                                                    alt="sofimakeup"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">


					<?php if ( has_nav_menu( 'primary' ) ) : ?>

							<?php
								wp_nav_menu( array(
//									'container'       => '<div>',
									'container_class' => 'menu-mainmenu-container',
									'menu_class'      => 'nav navbar-nav navbar-right',
									'menu_id'         => 'menu-mainmenu',
									'theme_location'  => 'primary',
								) );
							?>

					<?php endif; ?>

 
				</ul>
			</div>

		</div>

	</nav>
</header>