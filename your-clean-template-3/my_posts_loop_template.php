<article style="border-bottom: 2px solid #519703;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>

	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>" class="thumbnail" style="margin-top:25px;">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
		<?php } ?>
		<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-8<?php } else { ?>col-sm-12<?php } // разные классы в зависимости есть ли миниатюра ?>">
	<h2 style="text-align:center;font-size: 24px;"><a style="color:#B15932;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
		<a href="<?php the_permalink(); ?>"><?php echo excerpt(20); // пост превью, до more ?></a>
		</div>
	</div>
</article>