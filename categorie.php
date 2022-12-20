<?php get_header(); ?>
<div id="content" class="site-content">
	<div class="py-2"> 
		<div class="container py-1">
			<ul id="breadcrumb" class="breadcrumb">
				<li class="breadcrumb-item home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?>"><?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?></a></li>
				<?php printf( __( '%s', 'moddroid' ), '<li class="breadcrumb-item">' . single_cat_title( '', false ) . '</li>' ); ?>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<main id="primary" class="col-12 col-lg-8 content-area">
			<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?><section class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mb-3"><?php } else { ?> <?php } ?>
			<h1 class="h5 font-weight-semibold mb-3">
				<span class="border-bottom-2 border-secondary d-inline-block pb-1">
					<?php printf( __( '%s', 'moddroid' ), '<p>' . single_cat_title( '', false ) . '</p>' ); ?>
				</span>
			</h1>
			<div class="mb-4">
				<?php ex_themes_banner_header_ads_(); ?>
			</div>
			<div class="row">
				<?php $postcounter = 1; if(have_posts()) : ?>
				<?php while(have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
				<?php get_template_part('template/loop.item'); ?>
				<?php endwhile; ?>
				<?php else : ?>
			</div>
			<p style="text-align:center;padding:10px;"><?php echo esc_html__( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'moddroid' ); ?></p>
			<?php endif; ?>
		</div>
		<nav class="nav-pagination">
			<ul class="pagination">
				<?php ex_themes_page_navy_(); ?>
			</ul>
		</nav> 
		<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?></section><?php } else { ?> <?php } ?>
		</main>
		<!--sidebar-->
		<aside id="secondary" class="col-12 col-lg-4 widget-area">
			<?php get_sidebar(); ?>
		</aside>
		<!--sidebar-->
	</div>
	<?php get_template_part('template/breadcrumbs'); ?>
</div>
</div>
<?php get_footer(); ?>