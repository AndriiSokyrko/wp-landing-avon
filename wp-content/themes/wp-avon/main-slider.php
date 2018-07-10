<?php
$slider = new WP_Query(['post_type'=>'slider',
                        'meta_query' => array(
	                        array(
		                        'key' => '_thumbnail_id',
		                        'compare' => 'EXISTS'
	                        )
                        )
    ]);
	?>

<div class="home-slider hidden-xs-down col-xs-12 col-lg-9 mb-1">
	<div class="card mb-1">
		<div id="carousel-example-generic" class="card-block p-0 carousel carousel-home slide carousel-fade"
		     data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php $i=0;?>
				<?php while ( $slider->have_posts() ): $slider->the_post() ?>
				<a class="carousel-item <?php if ($i==1) echo " active" ;?>" href="/current-catalog#4">
					<?php the_post_thumbnail( 'full' ) ?>
					<div class="carousel-caption clearfix" style=": 2.5%">
						<div class="clearfix"></div>
					</div>
				</a>
					<?php $i++;?>
				<?php endwhile; ?>

			</div>
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span
					class="icon-prev" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span
					class="icon-next" aria-hidden="true"></span><span class="sr-only">Next</span></a>
		</div>
	</div>
</div>