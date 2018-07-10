<?php
	/**
	 * Created by PhpStorm.
	 * User: user
	 * Date: 12.05.2018
	 * Time: 17:48
	 */
?>

<div class="row" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
	<button class="navbar-toggler hidden-xl-up float-xs-right" type="button" data-toggle="collapse" data-target="#menu-main" aria-expanded="false" aria-controls="menu-main" aria-label="Toggle navigation"></button>

	<a class="navbar-brand" href="/" itemprop="url">
		<?php echo get_custom_logo();?>
		<meta itemprop="name" content="AVON Украина">
	</a>

	<div class="d-block hidden-xl-up clearfix"></div>

	<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'       => 'div',
			'container_class'=>'collapse navbar-toggleable-lg' ,
			'container_id'=>'menu-main',
			'menu_class'     => 'nav navbar-nav float-xl-right',
			'walker' => new Custom_Walker_Naw_Menu(),
		) );
		?>
	<?php endif; ?>
</div>
