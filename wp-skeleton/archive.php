<?php get_header(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
		<?php get_template_part('partials/post-block'); ?>
	<?php endwhile; ?>
	<?php the_posts_pagination(array('prev_text' => 'Prev', 'next_text' => 'Next', 'screen_reader_text' => ' ', 'before_page_number' => ' ')); ?>
<?php else: ?>
	<p><?php __('No posts here'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>