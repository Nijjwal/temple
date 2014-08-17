<?php get_header(); ?>






	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php #the_title(); ?></h2>

			<?php #include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			
			
			<!--Main text and Slideshow content region start-->

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
			
			<!--Main text and Slideshow content region ends-->

			<?php #edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		

		<?php endwhile; endif; ?>
		
		

<!--Custom Widgitized area for logo-->
<?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mySidebar') ) : ?>
<?php endif; ?>
<!--Custom Widitized area for logo ends-->
		
		
<?php get_sidebar(); ?>


<!--Custom Widgitized area for logo-->
<?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebarSocialMedia') ) : ?>
<?php endif; ?>
<!--Custom Widitized area for logo ends-->

<?php get_footer(); ?>