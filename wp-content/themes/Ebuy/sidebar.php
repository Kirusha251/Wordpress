<div id="right">

<div class="tabsdiv">
	<h3 class="sidetitl "> Контакты </h3>
	Наш адрес: блаблабла
	<br/>
	<h4>Время работы: 10:00 - 19:00, Пн-Пт</h4>
	<?php 
		$my_query = new WP_Query('orderby=comment_count&showposts=5');
		while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
	?>
	<div class="fblock">
	<?php
		if ( has_post_thumbnail() ) { ?>
			<img class="thumbim" src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php get_image_url(); ?>&amp;h=50&amp;w=50&amp;zc=1" alt=""/>
	<?php } else { ?>
			<img class="thumbim" src="<?php bloginfo('template_directory'); ?>/images/dummy.jpg" alt="" />
	<?php } ?>

	<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	<p> <?php the_time('F - j - Y'); ?></p>

	<div class="clear"></div>
	</div>
	<?php endwhile; ?>
</div>

<!-- 125px banners -->	
<?php include (TEMPLATEPATH . '/sponsors.php'); ?>	

<!-- Sidebar widgets -->
<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
</ul>
</div>

</div>