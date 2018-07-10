<?php
	/*
	Template Name: all-posts
	Template Post Type: post, page, product
	*/
?>

<?php
	/**
	 * The template for displaying all single posts and attachments
	 *
	 * @package WordPress
	 * @subpackage Twenty_Sixteen
	 * @since Twenty Sixteen 1.0
	 */

	get_header(); ?>

<?php
//	global $wp_query;

//	$wp_query = new WP_Query(array(
// 		'category_name' => 'beauty',
//		'posts_per_page' => '3',
//		'paged' => get_query_var('paged') ?: 1 // страница пагинации
//	));
//	$query = new WP_Query(['post_type'=>'post', 'posts_per_page'=>3 , 'category_name'=>'news']);



?>


<section class="pt-3 pb-3 wrap c-h content container" style="min-height: 470px;">
	<div class="posts-items">

		<?php
			$i=0;
			while ( have_posts() ) : the_post(); ?>
				<?php if($i%3==0):?>
					<div class="row mb-2">
				<?php endif;?>

				<div class="col-lg-4">
					<article class="card">
						<div class="card-block card-block-image"
						     style="background-image: url(
						     <?php
							     $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id() );
							     echo $thumb_url[0];
						     ?>
							     );">
						</div>

						<div class="card-block">
							<h1 class="h4 card-title"><?php the_title() ?></h1>
							<p class="card-text"><?php the_excerpt() ?></p>
							<a class="btn btn-secondary bg-faded pink"
							   href="<?php the_permalink(); ?>"
							   title="<?php the_title() ?>">Смотреть</a>


						</div>

					</article>
				</div>

				<?php

				if(  $i%3==2):  ?>
					</div> <!--  //row -->
				<?php endif;  $i++; ?>


				<?php the_posts_pagination(); ?>

			<?php   endwhile; ?>


		<!--		<div class="col-lg-4">-->
		<!--			<article class="card">-->
		<!--				<div class="card-block card-block-image" style="background-image: url('/content/uploads/kachestvenno-ochishaem-lico-professionalnymi-kosmeticheskimi-sredstvami-preview.jpg');"></div>-->
		<!--				<div class="card-block">-->
		<!--					<h1 class="h4 card-title">Качественно очищаем лицо профессиональными косметическими средствами</h1>-->
		<!--					<p class="card-text">Как же сохранить отменное состояние кожи надолго? Начинать нужно именно с очищения кожи, продолжая этот процесс ее глубоким питанием.</p>-->
		<!--					<a class="btn btn-secondary bg-faded pink" href="/posts/kachestvenno-ochishaem-lico-professionalnymi-kosmeticheskimi-sredstvami" title="Качественно очищаем лицо профессиональными косметическими средствами">Смотреть</a>-->
		<!--				</div>-->
		<!--			</article>-->
		<!--		</div>-->
		<?php the_posts_pagination(); ?>
		<nav class="text-xs-center">
			<?php
				$args = array(
					'show_all'     => false, // показаны все страницы участвующие в пагинации
					'end_size'     => 1,     // количество страниц на концах
					'mid_size'     => 1,     // количество страниц вокруг текущей
					'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
					'prev_text'    => __('« Previous'),
					'next_text'    => __('Next »'),
					'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
					'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
					'screen_reader_text' => __( 'Posts navigation' ),
				);
			?>
			<?php the_posts_pagination($args) ; ?>
			<!--		<ul class="pagination">-->
			<!--			<li class="page-item"><a href="/posts/2" class="page-link"><i class="fa fa-arrow-left pink" aria-hidden="true"></i><span class="sr-only">Пред. страница</span></a></li>          </ul>-->
		</nav>
</section>

<?php wp_reset_postdata();?>
<?php get_rating_social_menu(); ?>

<?php get_footer(); ?>
