<?php get_header(); ?>

<div id="home-content" class="clearfix">
<div id="content" >

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">

	<div class="title">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	</div>
<div class="postmeta">
		<span class="author"> <?php the_author(); ?> </span>
		<span class="clock"> <?php the_time('M - j - Y'); ?></span>
		 <span class="comm"><?php comments_popup_link('0 комментариев', '1 комментарий', '% комментариев'); ?></span>
</div>
	<div class="entry">
		<?php the_content('Читать далее &raquo;'); ?>
	
		<div class="clear"></div>
		<?php wp_link_pages(array('before' => '<p><strong>Страницы: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>

	<div class="postmeta clearfix">
		<span class="categori"> Рубрики: <?php the_category(', '); ?>   </span>
	
	</div>
</div>

<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>

<?php get_sidebar(); ?></div>
<?php get_footer(); ?>