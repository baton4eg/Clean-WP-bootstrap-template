<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
<div class="owl-carousel">


		<?php if ( has_post_thumbnail() ) { ?>
				<div class="owl_thumb" style="min-height: 100px;">

<a class="thumb-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
				<a href="<?php the_permalink(); ?>" class="thumbnail mythumbnail">
					<?php the_post_thumbnail('big-thumb', array( 'class' => 'center' ) ); ?>
				</a>
				</div>
		<?php } ?>


</div>
</article>