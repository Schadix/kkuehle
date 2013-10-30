<?php get_header(); ?>

	<div class="content">
	<!-- Start: Right Panel -->

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<!-- Start: Post -->
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="postmeta">Posted on <a href="<?php the_permalink() ?>"><?php the_time( get_option( 'date_format' ) ) ?></a> by <?php the_author() ?></p>		
					<div class="entryContent">
					    <?php the_post_thumbnail(); ?>
						<?php the_excerpt(); ?>
					</div>
					<p>Posted in <?php the_category(', ') ?><?php the_tags( ' | Tags: ', ', ', ''); ?> | <?php edit_post_link('Edit', '', ' | '); ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
				</div>
				<div class="clear"></div>
				<!-- End: Post -->
			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Previous Posts') ?></div>
				<div class="alignright"><?php previous_posts_link('Next posts &raquo;') ?></div>
			</div>

		<?php else : ?>

			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_template_part('searchform'); ?>

		<?php endif; ?>
	<!-- End: Right Panel -->
	<!-- Start: Left Panel -->
		<?php get_sidebar(); ?>
	<!-- End: Left Panel -->
<?php get_footer(); ?>
