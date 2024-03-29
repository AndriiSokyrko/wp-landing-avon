<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<!-- .content-area -->

<?php if(is_home()):?>
<div id="slides">
	<div class="slides-container">
			<?php $args=['post_type'=>'slider'];
				$the_query = new WP_Query( $args );
			while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
					   <?php the_content()?>

			 <?php  } ?>


	</div>
</div>

	<?php else:?>
	<?php the_content()?>
<?php endif;?>



<?php get_footer(); ?>
