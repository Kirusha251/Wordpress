<?php get_header(); ?>

<div id="home-content" class="clearfix">
<div class="topnav">	
	<?php
		$mySearch =& new WP_Query("s=$s & showposts=-1");
		$num = $mySearch->post_count;
		echo $num.' запрос был обработан  '; the_search_query();
	?> за <?php  get_num_queries(); ?> <?php timer_stop(1); ?> секунд.
</div>

<div id="content" >
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Постоянная ссылка на <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="entry">
<?php wpe_excerpt('wpe_excerptlength_index', ''); ?>
<div class="clear"></div>
</div>
</div>
<?php endwhile; ?>

<?php getpagenavi(); ?>

<?php else : ?>

<div class="post">
<div class="title">
		<h2>Ваш запрос - <?php the_search_query();?> - не нашел совпадений.</h2>
</div>


<div class="entry">
<p>Проделайте следующие действия:</p>
<ul>
   <li>  Убедитесь, что все слова написаны правильно.</li>
   <li>  Попробуйте другие ключевые слова.</li>
   <li>  Попробуйте использовать более общие слова.</li>
</ul>
</div></div>


<?php endif; ?>

</div>
<?php get_sidebar(); ?></div>
<?php get_footer(); ?>