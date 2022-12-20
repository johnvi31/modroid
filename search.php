<?php get_header(); ?> 
<div id="content" class="site-content">
	<div class="py-2"> 
		<div class="container py-1">
			<ul id="breadcrumb" class="breadcrumb">
				<li class="breadcrumb-item home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?>"><?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?></a></li>
				<li class="breadcrumb-item active"><?php global $opt_themes; if($opt_themes['exthemes_Searchresults']){ ?><?php echo $opt_themes['exthemes_Searchresults']; ?><?php } ?> <?php echo get_search_query(); ?></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><div class="row"><?php } else { ?><?php } ?>
			<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><main id="primary" class="col-12 col-lg-8 content-area"><?php } else { ?><main id="primary" <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?>class="content-area"<?php } else { ?>class="content-area mx-auto" style="max-width: <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?> 900px<?php } else { ?> 820px<?php } ?>"<?php } ?>><?php } ?> 
			<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?><section class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mb-3"><?php } else { ?> <?php } ?>
				<h1 class="h5 font-weight-semibold mb-3">
					<span class="border-bottom-2 border-secondary d-inline-block pb-1">
						<?php global $opt_themes; if($opt_themes['exthemes_Searchresults']){ ?><?php echo $opt_themes['exthemes_Searchresults']; ?><?php } ?> <?php echo get_search_query(); ?> </span>
				</h1>
				<div class="mb-4">
					<?php ex_themes_banner_header_ads_(); ?>
				</div>				
				<?php $postcounter = 1; if(have_posts()) : ?>
				<div class="row mb-2">	
					<?php while(have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
						<?php if ( get_post_type() === 'news' ) { ?> 
						<?php get_template_part('template/loop.item.news'); ?>
						<?php } else {  ?>
						<?php get_template_part('template/loop.item'); ?>
						<?php } ?>
					<?php endwhile; ?>
				</div>
				<?php else : ?>				 
				<div class="alert alert-dangers mb-4"><?php global $opt_themes; if($opt_themes['exthemes_File_not_founds']){ ?><?php echo $opt_themes['exthemes_File_not_founds']; ?><?php } ?> 
				</div>				 
				<?php endif; ?>				
				<nav class="nav-pagination">
					<ul class="pagination">
						<?php ex_themes_page_navy_(); ?>
					</ul>
				</nav>				
			<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?></section><?php } else { ?> <?php } ?>					
			</main>
			<!--sidebar-->
			<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><!--sidebar--><aside id="secondary" class="col-12 col-lg-4 widget-area"><?php get_sidebar(); ?></aside><!--sidebar--><?php } else { ?><?php } ?>
			
		<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?></div><?php } else { ?><?php } ?>
		<?php get_template_part('template/breadcrumbs'); ?>
	</div>
</div>
<?php get_footer(); ?>