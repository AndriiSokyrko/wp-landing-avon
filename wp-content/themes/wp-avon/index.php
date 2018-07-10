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

<section class="pb-3 wrap c-h " style="min-height: 430px;">
<div class="main-avon-content">
	<div class="top-part">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-5 pt-1">
					<div class="row top-pp pr-1">
						<?php dynamic_sidebar('form-register')?>
<
					</div>
				</div>


				<div class="home-reg-form col-xl-4 col-lg-5 col-md-7 form-set pt-1">
					<div>
						<ul class="nav nav-tabs main-form-choose p-0 text-xs-center mb-1 pink" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="form-tab" href="#full-form" role="tab" data-toggle="tab" aria-controls="full-form" aria-expanded="true">
									<h5 class="mb-0"><b class="pink">Регистрация</b></h5>
								</a>
							</li>
							<li class="nav-item float-xs-right"><a class="nav-link text-muted" id="quick-form-tab" href="#quickform" role="tab" data-toggle="tab" aria-controls="quickform" aria-expanded="false">Упрощенная<span class="hidden-xs-down"> форма</span></a></li>
						</ul>
						<?php  get_template_part('template-form-register'); ?>
					</div>
				</div>
 			</div>
		</div>
	</div>
	<div class="l-c-u bg-faded mb-3">
		<div class="container">
			<div class="row text-xs-center pink" itemscope="" itemtype="http://schema.org/ContactPoint">
				<h3 class="pink">Бесплатная консультация <strong style="white-space:nowrap;" itemprop="telephone">+ 38 050 482 7272</strong></h3>
				<p class="mb-0">Будем рады ответить на Ваши вопросы. По телефону мы доступны с Пн. по Пт. с 9 до 18. <strong>Новинки, акции, скидки в группе <span itemprop="name">AVON</span> в <a href="https://vk.com/avonorgua" class="blue-link" title="AVON Ukraine - Вконтакте" target="_blank">vk.com</a> - присоединяйтесь!</strong></p>
			</div>
		</div>
	</div>
	<div class="container actual-info mb-3 clearfix">
		<div class="row">
			<?php get_template_part('main','slider')?>
			<div class="card-catalog col-xs-12 col-sm-5 col-md-4 col-lg-3 float-xs-right">
				<?php  dynamic_sidebar('actual-catalog')?>
			</div>
			<div class="coupon-links col-xs-12 col-sm-7 col-md-8 col-lg-9 float-xs-left">
				<div class="row clearfix">
					<?php  dynamic_sidebar('form-discount')?>



					<div class="col-xs-12 col-lg-6 pb-1">
						<table class="mb-1 clearfix">
							<tbody><tr>
								<td class="p-0 align-top"><a class="btn btn-block btn-secondary btn-lg pink" href="https://avon.org.ua/#form" title="AVON Украина - официальная регистрация"><b>Зарегистрироваться в AVON</b></a></td>
							</tr>
							<tr>
								<td><a class="btn btn-block btn-secondary pink" href="https://avon.org.ua/discount" title="AVON Украина - скидка">Ознакомиться с системой скидок</a></td>
							</tr>
							<tr>
								<td><a class="btn btn-block btn-secondary pink" href="https://avon.org.ua/place-an-order" title="Заказать продукцию AVON">Заказать продукцию</a></td>
							</tr>
							<tr>
								<td><a class="btn btn-block btn-secondary pink" href="https://avon.org.ua/#choose-channel" title="Задать вопрос консультанту AVON">Задать вопрос консультанту</a></td>
							</tr>
							</tbody></table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-avon clearfix">
		<h3 class="h1 pink heading text-xs-center">AVON - это компания...</h3>
		<div class="video-txt">
			<div class="container clearfix pt-1">
				<div class="row">
					<div class="col-lg-6 p1 mb-1">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item lazyload" data-src="https://www.youtube.com/embed/ZbXmjucIITA?iv_load_policy=3&amp;rel=0&amp;autoplay=0&amp;showinfo=0&amp;controls=1" allowfullscreen="" src="./AVON Украина - официальная регистрация, каталоги и акции_files/saved_resource.html"></iframe>
						</div>
					</div>
					<div class="col-lg-6 p2 mb-1">
						<p class="text-justify m-0 lh-2">AVON - это компания, которая наносит тушь на ресницы и дает пищу на столы, которая одной рукой борется с морщинами и другой – с раком груди. Компания, которая знает цену идеальным губам и все же не молчит а говорит «Нет» домашнему насилию и «Да» самореализации и финансовой независимости женщин. Это компания, которая не только приносит красоту в дом, но и открывает двери в мир новых возможностей. Компания, которая поддерживает 6 миллионов Представителей в более чем 100 странах мира. Это – AVON, компания, которая на протяжении 130 лет работает ради красоты, инноваций, оптимизма и, прежде всего, ради женщин.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</section>

<div class="modal fade modal-vc" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button engine="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="contactModalLabel">Написать консультанту</h4>
			</div>
			<div class="modal-body text-xs-center">
				<div class="d-block mb-1">
					<a class="btn btn-md sm-button sm-vk mr-1" href="https://new.vk.com/im?sel=-65755507" rel="nofollow" target="_blank">&nbsp;</a>
					<a class="btn btn-md sm-button sm-ok mr-1" href="https://ok.ru/profile/243879796722" target="_blank">&nbsp;</a>
					<a class="btn btn-md sm-button sm-fb" href="https://www.facebook.com/avon.berd" target="_blank">&nbsp;</a>
				</div>
				<div class="d-block"><a class="c-more" href="https://avon.org.ua/#chat" rel="nofollow">Отправить сообщение с сайта</a></div></div>
		</div>
	</div>
</div>

<div class="chat-menu true-fixed">
	<a class="chat-label" href="https://avon.org.ua/#chat" rel="nofollow">
		<span><i class="fa fa-paper-plane ml-1 mr-1" aria-hidden="true"></i>Отправить сообщение</span>
	</a>
</div>

<a href="https://http://wp-avon/#" class="scroll-to-top">
	<div class="true-fixed"><i class="fa fa-angle-up"></i></div>
</a>





<?php get_rating_social_menu(); ?>
<a data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Заполни анкету и получи скидку 26% + подарок" id="cake-promo" class="cake-promo hidden-sm-down" data-original-title="Бесплатная регистрация + акция" href="https://avon.org.ua/?utm_source=site&amp;utm_medium=pnc#form">Бесплатная регистрация + подарок</a>






<?php get_footer(); ?>
