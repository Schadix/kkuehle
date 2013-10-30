<?php get_header(); ?>
	<div id="container2">
		<?php get_sidebar(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div id="content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; endif; ?> 
		<div class="clearfloats"></div>
	</div>
<?php get_footer(); ?>
