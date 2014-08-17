<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

		      

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<div id="page-wrap">


		    
			         <!--Custom Widgitized area for thirdcolumnBlogAreaonly-->
             		<div id="thirdColumnforBlogPage">
					<?php
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('thirdColumnforBlogPage') ) : ?>
					<?php endif; ?>
					</div>
					<!--Custom Widitized area ends-->
		
		
		
		
		    <div class="customBlogEntry" id="entryForSinglePost">					
			    <h2><?php the_title(); ?></h2>
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>						
			</div>	<!--entry wrapper ends-->
			
			
			
			
			
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
			
			
			
		</div><!--Main content wrapper ends-->
		
		
		

			
			<?php //edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>



		
		




<?php get_footer(); ?>