<aside>

			<!--
			<div id="logo">
				<img src="images/logo.png" alt="logo">
				, youtube links/icons here.
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text... 
			</div>-->
			
			<nav>
				<?php wp_nav_menu(array('menu'=>'Main Nav Menu'));?>
			</nav>
			
			
			<!--
			<div class="widgets">
			Area for other widgets. You can add facebook, 
			twitter, google plus, youtube links/icons here. <br/>
			It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text...			
			</div>
			-->
			
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
<?php endif; ?>		
			
			
		</aside>
    



