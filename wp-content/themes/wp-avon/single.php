<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="pb-3 wrap c-h container article-30" style="min-height: 241px;">
	<div class="row">
		<!-- Blog Post Content Column -->
		<div class="col-lg-8">
			<?php
				while ( have_posts() ) : the_post(); ?>

					<?php echo get_the_content(); ?>
					<section>
						<p class="text-muted text-xs-right"><?php the_date() ?></p>
					</section>

				<?php endwhile; ?>

		</div>

		<div class="col-lg-4 pt-2">
			<div class="row">
				<!-- Blog Search Well -->
				<div class="col-md-6 col-lg-12">
					<a href="/#form" class="promo-a clearfix p-1 d-block mb-2" title="Эйвон Украина">
						<p class="h3 text-xs-center">Заполни анкету и получи:</p>
						<ul class="mb-0 p-0">
							<li>Аромат в подарок</li>
							<li>Скидку до 26%</li>
							<li>Бесплатную доставку</li>
						</ul>
					</a>
				</div>
				<div class="col-md-6 col-lg-12">
					<a href="/current-catalog" class="d-block card  clearfix btn-brochure mb-2">
						<div class="col-xs-6 btn-b-cover"></div>
						<div class="col-xs-6 btn-b-text text-xs-center pt-1 pb-1">
							<h3 class="h3 lh-2 clearfix mb-1">Электронный каталог Эйвон</h3>
							<p class="btn btn-secondary p-1 wrapstr bg-faded mb-0 pink">Смотреть</p>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-12">
					<a class="btn btn-secondary lh-2 btn-block wrapstr bg-faded pink mb-2" href="#choose-channel"><b>Задать
							вопрос консультанту</b></a>
					<!-- Blog Categories Well -->
					<div class="mb-2">
						<h4 class="mb-1 h5">Категории в блоге:</h4>
						<div class="row">
							<div class="col-lg-6">
								<div class="d-block"><a class="c-more lh-2" href="/category/news"
								                        title="Новости от Эйвон, акценты текущего каталога и информация о предстоящих акциях. Актуальные выгодные предложения для представителей компании AVON в Украине.">Новости</a>
								</div>
								<div class="d-block"><a class="c-more lh-2" href="/category/beauty"
								                        title="Тенденции красоты и стиля, рекомендации Эйвон, отзывы представителей и специалистов. Модные тренды текущего сезона. Будь стильной вместе с Эйвон Украина.">Красота
										и стиль</a></div>
							</div>
							<div class="col-lg-6">
								<div class="d-block"><a class="c-more lh-2" href="/category/instructions"
								                        title="Инструкции и ответы на вопросы от компании AVON. Бесплатная консультация, обучение партнеров и представителей Эйвон. Часто задаваемые вопросы.">Инструкции</a>
								</div>
							</div>
							<!-- /.row -->
						</div>
					</div>
					<div class="mb-2">
						<h4 class="mb-1 h5">Открытые позиции:</h4>
						<div class="d-block"><a class="c-more lh-2" href="/#form" title="Стать представителем Эйвон">Представитель
								Эйвон</a></div>
						<div class="d-block"><a class="c-more lh-2" href="/career" title="Стать партнером Эйвон">Партнер
								Эйвон</a></div>
						<!-- /.row -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_rating_social_menu(); ?>

<?php get_footer(); ?>
