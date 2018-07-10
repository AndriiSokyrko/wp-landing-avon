<?php
	/**
	 * The template for displaying pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages and that
	 * other "pages" on your WordPress site will use a different template.
	 *
	 * @package WordPress
	 * @subpackage Twenty_Sixteen
	 * @since Twenty Sixteen 1.0
	 */

	get_header(); ?>



<?php
	//	while ( have_posts() ) : the_post(); ?>
<?php
	$gal = get_post_galleries( get_the_ID(), false );
	//									print_r($gal);
?>
<?php if ( ! is_page(array(  'certificate', 'price', 'contacts' )) ): ?>
	<div class="container">
		<div class="flexslider slider__wrapper">
			<div class="row">
				<div class="col-md-12">

					<div id="slider" class="flexslider gallery__slider">

						<div class="flex-viewport">
							<ul class="slides">


								<?php if ( count( $gal[1]['src'] > 0 ) ): ?>

									<?php foreach ( $gal[1]['src'] as $item ): ?>
										<li><img src="<?php echo $item ?>" alt=""></li>
									<?php endforeach; ?>

								<?php endif; ?>

							</ul>
						</div>
						<ul class="flex-direction-nav">
							<li><a class="flex-prev flex-disabled" href="#"
							       tabindex="-1"></a></li>
							<li><a class="flex-next" href="#"></a></li>
						</ul>
					</div>
					<div id="carousel" class="flexslider">

						<div class="flex-viewport">
							<ul class="slides">
								<?php if ( count( $gal[0]['src'] > 0 ) ): ?>
									<?php foreach ( $gal[0]['src'] as $item ): ?>
										<li><img src="<?php echo $item ?>" alt=""></li>
									<?php endforeach; ?>
								<?php endif; ?>
							</ul>
						</div>

						<ul class="flex-direction-nav">
							<li><a class="flex-prev flex-disabled" href="http://wp-landing-iftemplar/25-2/#"
							       tabindex="-1"></a>
							</li>
							<li><a class="flex-next" href="http://wp-landing-iftemplar/25-2/#"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php elseif(is_page( 'certificate' )): ?>
	<div class="container-fluid border_add dyplom__wrapper">
		<div class="row">
			<?php if ( count( $gal[0]['src'] > 0 ) ): ?>
				<?php foreach ( $gal[0]['src'] as $item ): ?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<a href="<?php echo $item ?>" rel="gallery">
							<img src="<?php echo $item ?>" alt="">
						</a>
					</div>

				<?php endforeach; ?>

			<?php endif; ?>

		</div>
	</div>
<?php else : ?>
	<?php
		while ( have_posts() ) : the_post(); ?>
	 
     <?php  echo get_the_content();  ?>

		<?php endwhile; ?>
<?php endif; ?>
<!--	--><?php //endwhile; ?>




<?php get_footer(); ?>
