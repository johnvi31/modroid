<?php get_header(); 
global $wpdb, $post, $opt_themes;
$post_id				= get_the_ID();
$user_info				= get_userdata(1);
$username				= $user_info->user_login;
$first_name				= $user_info->first_name;
$last_name				= $user_info->last_name;
$display_name			= $user_info->display_name;

global $wpdb, $post, $opt_themes;
$image_id						= get_post_thumbnail_id(); 
$full							= 'full';
$icons							= '64';
$image_url						= wp_get_attachment_image_src($image_id, $full, true); 
$image_url_default				= $image_url[0];
$thumbnail_images				= $image_url;
$post_id						= get_the_ID();
$url							= wp_get_attachment_url( get_post_thumbnail_id($post->ID), $icons );
$defaults_no_images				= $opt_themes['ex_themes_defaults_no_images_']['url'];
$thumb_id						= get_post_thumbnail_id( $id );
if ( '' != $thumb_id ) {
$thumb_url						= wp_get_attachment_image_src( $thumb_id, $icons, true );
$image							= $thumb_url[0];
	} else {
$image							= $defaults_no_images;
	}
$urlimages2						= $image;

$thumbnails_gp					= get_post_meta( $post->ID, 'wp_poster_GP', true );
$thumbnails						= str_replace( 'http://', '', $thumbnails_gp );
$thumbnails						= str_replace( 'https://', '', $thumbnails_gp );
$randoms						= mt_rand(0, 3);
$cdn_thumbnails					= '//i'.$randoms.'.wp.com/'.$thumbnails.'';
$thumbnails						= get_post_meta( $post->ID, 'wp_poster_GP', true );
$version						= get_post_meta( $post->ID, 'wp_version', true );
$versionX1						= get_post_meta( $post->ID, 'wp_version_GP', true );
$version						= str_replace('Varies with device', ' ', $version);
$versionX1						= str_replace('Varies with device', ' n/a', $versionX1);
$versionX						= '-';
if ( $version === FALSE or $version == '' ) $version = $versionX1;
$sizes							= get_post_meta( $post->ID, 'wp_sizes', true );
$sizesX1						= get_post_meta( $post->ID, 'wp_sizes', true );
$sizesX							= '-';
if ( $sizes === FALSE or $sizes == '' ) $sizes = $sizesX;
$defaults_no_images				= $opt_themes['ex_themes_defaults_no_images_']['url'];

?>
<div id="content post-id-<?php the_ID(); ?> post-view-count-<?php ex_themes_set_post_view_(); ?><?= ex_themes_get_post_view_(); ?>" class="site-content">
 
	<div class="container">
		<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><div class="row"><?php } else { ?><?php } ?>
			<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><main id="primary" class="col-12 col-lg-8 content-area"><?php } else { ?><main id="primary" <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?>class="<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?>col-12 col-lg-9 content-area<?php } else { ?>content-area<?php } ?>"<?php } else { ?>class="content-area mx-auto" style="max-width: <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?> 900px<?php } else { ?> 820px<?php } ?>"<?php } ?>><?php } ?>
			<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?><article class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mx-auto mb-3" style="max-width: <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?> 900px<?php } else { ?> 820px<?php } ?>;"><?php } else { ?> <?php } ?>
			<ul id="breadcrumb" class="breadcrumb <?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?>ml-3<?php } else{ ?><?php } ?>"  style="margin-bottom: 10px;">
				<li class="breadcrumb-item home"><a href="<?php echo home_url(); ?>" title="<?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?>"><?php global $opt_themes; if($opt_themes['ex_themes_activate_rtl_']){ ?><?php global $opt_themes; echo $opt_themes['rtl_homes']; ?><?php } else { ?>Home<?php } ?></a></li>
				<?php if (get_the_term_list( $post->ID, 'news_categories' )) { ?>
				<li class="breadcrumb-item"><?php echo get_the_term_list( $post->ID, 'news_categories', '<span class="the-category">', ', ', '</span>' ); ?></li>
				<?php } ?>
				<li class="breadcrumb-item active"><?php echo get_the_title(); ?></li>
			</ul>
				<h1 class="h5 font-weight-semibold text-truncate mb-2"><?php echo get_the_title(); ?></h1>
				<div class="small font-weight-medium text-muted mb-3">
					<em>by <?php echo $display_name; ?>, <?php echo get_the_time('l, j F Y ')?> (<?php the_time(); ?>) <?php echo edit_post_link( __( 'edit post', 'moddroid' ), ' ', ' ' ); ?>  </em>
				</div>
				<div class="text-center mb-3">
					<img width="100%" height="100%" src="<?php if (has_post_thumbnail()) { echo $image_url[0]; } else { echo $defaults_no_images; } ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" style="max-height: 300px;" />
				</div> 
				<div class="mb-3 entry-content" id='entry-content'>
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
				</div> 
				 
				<?php if(function_exists('kk_star_ratings')) : ?>
				<div class="text-center d-flex align-items-center justify-content-center py-3 mb-3">
					<?php echo kk_star_ratings(); ?>
				</div>
				<?php endif ?>
				<?php ex_themes_blog_shares_2(); ?>
				<?php if ( shortcode_exists( 'rns_reactions' ) ): ?>
				<?php echo do_shortcode( '[rns_reactions]' ); ?>
				<?php else: ?>
				<?php endif;?>				
				<?php if (get_the_term_list( $post->ID, 'news_tags' )) { ?>
				<?php echo get_the_term_list( $post->ID, 'news_tags', '<span class="tags-links"> ', ' ', '</span>' ); ?>
				<?php } ?>
			 <?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?></article><?php } else { ?> <?php } ?>	
				<!--comments-->
				<?php comments_template(); ?>
				
			</main>
			 
			<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?><!--sidebar--><aside id="secondary" class="col-12 col-lg-4 widget-area"><?php get_sidebar(); ?></aside><!--sidebar--><?php } else { ?><?php } ?>
			
		<?php global $opt_themes; if($opt_themes['sidebar_activated_']) { ?></div><?php } else { ?><?php } ?>
		<?php get_template_part('template/breadcrumbs'); ?>
	</div>
</div>
<?php get_footer();  