<?php
  /*
     Template Name: Blog Page Template
  */
?>

<?php get_header(); ?>



<div id="main-content">
        		            			        

         <!--Custom Widgitized area for thirdcolumnBlogAreaonly-->
             		<div id="thirdColumnforBlogPage">
					<?php
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('thirdColumnforBlogPage') ) : ?>
					<?php endif; ?>
					</div>
					<!--Custom Widitized area ends-->	
        <div class="customBlogEntry"> <!--start wrapper for blogs only-->
		<?php query_posts("posts_per_page=100");?>
		            		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">				

					<div class="customBlogEntry">
					    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					</div>
					
										
				</div>

			<?php endwhile; ?>
				

			<!-- Link to older post and newer post-->
			<?php //include (TEMPLATEPATH . '/inc/nav.php' ); ?>

			<?php else : ?>

				<h2>Not Found</h2>

			<?php endif; ?>		
			
		</div><!--End wrapper for blogs only!-->
		
		
</div> <!--END main content -->


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