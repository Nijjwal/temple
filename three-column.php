<?php
  /*
     Template Name: Three Column Template
  */
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
		<div class="post" id="post-<?php the_ID(); ?>">						
						
	        <!--Custom Widgitized area for logo-->
			<div id="firstRightSidebar">
			<?php
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('thirdColumnforOtherPage') ) : ?>
			<?php endif; ?>
			</div>
			<!--Custom Widitized area for logo ends-->		
			
			
			<div class="customEntrySecondColumn">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			</div>

			
		</div>
	<?php endwhile; endif; ?>


<!--Custom Widgitized area for logo-->
<?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mySidebar') ) : ?>
<?php endif; ?>
<!--Custom Widitized area for logo ends-->
		
		
<?php get_sidebar(); ?>


<!--Custom Widgitized area for socialMedia-->
<?php
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebarSocialMedia') ) : ?>
<?php endif; ?>
<!--Custom Widitized area for socialMedia ends-->





<?php get_footer(); ?>