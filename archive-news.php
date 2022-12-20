<?php get_header(); 
global $wpdb, $post, $opt_themes;
$defaults_no_images				= $opt_themes['ex_themes_defaults_no_images_']['url'];
?>
<div id="content" class="site-content">
	<div class="py-2"> 
		<div class="container py-1">
			<ul id="breadcrumb" class="breadcrumb">
				<li class="breadcrumb-item home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?>"><?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?></a></li>
				<li class="breadcrumb-item active"><?php global $opt_themes; if($opt_themes['exthemes_News']){ ?><?php echo $opt_themes['exthemes_News']; ?><?php } ?></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><div class="row"><?php } else { ?><?php } ?>
			<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><main id="primary" class="col-12 col-lg-8 content-area"><?php } else { ?><main id="primary" <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?>class="content-area"<?php } else { ?>class="content-area mx-auto" style="max-width: <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?> 900px<?php } else { ?> 820px<?php } ?>"<?php } ?>><?php } ?> 
		<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?><section class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mb-3"><?php } else { ?><section class="mb-4"><?php } ?>
		<h1 class="h5 font-weight-semibold mb-3">
		
			<span class="<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?>text-body<?php } else { ?>text-body border-bottom-2 border-secondary d-inline-block pb-1<?php } ?>">
				<?php global $opt_themes; if($opt_themes['exthemes_News']){ ?><?php echo $opt_themes['exthemes_News']; ?><?php } ?>
			</span>
		</h1>
		<div class="mb-4">
			<?php ex_themes_banner_header_ads_(); ?>
		</div>
		<div class="row">
			<?php $postcounter = 1; if(have_posts()) : ?>
			<?php while(have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
			<div class="col-12 col-sm-6 col-lg-4 mb-4 ">
				<a class="embed-responsive embed-responsive-16by9 bg-cover d-block" style="background-image: url(<?php if (has_post_thumbnail()) { echo $image_url[0]; } else { echo $defaults_no_images; } ?>); box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.15);" href="<?php the_permalink() ?>">
					<div class="d-flex align-items-end p-3 position-absolute" style="background-color: rgba(0, 0, 0, 0.5); top: 0; bottom: 0; left: 0; right: 0;">
						<h3 class="text-white mb-0" style="font-size: 0.875rem;"><?php the_title(); ?></h3>
					</div>
				</a>
			</div>
			<?php endwhile; ?>	
			<?php else : ?>
		</div>
		<p style="text-align:center;padding:10px;">Ready to publish your first post? <a href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>">Get started here</a></p>
		<?php endif; ?>
		<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?></section><?php } else { ?> <?php } ?>
	</div>
	<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?> <?php } else { ?> 
	<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?><section class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mb-3"><?php } else { ?><section class="mb-4" style='display:none'><?php } ?>
		<h2 class="h5 font-weight-semibold mb-3">
			<span class="border-bottom-2 border-secondary d-inline-block pb-1">
				Tags </span>
		</h2>
		<div class="d-flex flex-wrap">
			<?php
			/* $argsx = array( 'taxonomy' => 'news_tags',  'order' => 'ASC' );
			$categoriesx = get_categories( $argsx );
			$terms = get_the_terms($post->ID, 'news_tags');
			if(! empty($categoriesx)){
				foreach($categoriesx as $term){
					$url = get_term_link($term->slug, 'news_tags');
					print "<span class=\"btn btn-light mr-2 mb-2\"><a href='#{$url}'>{$term->name}</a></span>";
				}
			} */
			?>
			<?php echo trim(strip_tags(get_the_term_list( $post->ID, 'news_tags', '<span class="btn btn-light mr-2 mb-2">', ', ', '</span>' ))); ?>
		</div>
		 
	</section>
	<?php } ?>
	<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?></section><?php } else { ?> <?php } ?>					
			</main>
			<!--sidebar-->
			<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><!--sidebar--><aside id="secondary" class="col-12 col-lg-4 widget-area"><?php get_sidebar(); ?></aside><!--sidebar--><?php } else { ?><?php } ?>
			
		<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?></div><?php } else { ?><?php } ?>
</div>
 
<?php get_footer(); ?>