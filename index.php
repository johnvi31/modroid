<?php get_header(); 
global $wpdb, $post, $opt_themes;
$latest_post_hide		= $opt_themes['enable_latest_post'];
?> 
<div id="content" class="site-content">
	<div class="container pt-3">
		<div class="row">
			<main id="primary" class="col-12 col-lg-8 content-area">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('news-homes') ) : endif;  ?>	
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('editor-choices') ) : endif;  ?>					
				<?php ex_themes_banner_header_ads_(); ?>
				<?php if($latest_post_hide) { ?>				 
				<?php } else { ?>
				<?php get_template_part('template/home'); ?>				
				<nav class="nav-pagination">
					<ul class="pagination blogPager">
						<?php ex_themes_page_navy_(); ?> 
					</ul>
				</nav> 
				<?php } ?>
				<?php ex_themes_banner_header_ads_(); ?>
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-popular') ) : endif;  ?>	                 
			</main>
			<!--sidebar-->
			<aside id="secondary" class="col-12 col-lg-4 widget-area">
				<?php get_sidebar(); ?>
			</aside>
			<!--sidebar-->
		</div>
	</div>
</div> 
<?php get_footer(); ?>