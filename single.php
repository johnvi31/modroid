<?php 
/*-----------------------------------------------------------------------------------*/
/*  EXTHEM.ES
/*  PREMIUM WORDRESS THEMES
/*
/*  STOP DON'T TRY EDIT
/*  IF YOU DON'T KNOW PHP
/*  AS ERRORS IN YOUR THEMES ARE NOT THE RESPONSIBILITY OF THE DEVELOPERS
/*
/*
/*  @EXTHEM.ES
/*	More Premium Themes Visit Now On https://exthem.es/
/*
/*-----------------------------------------------------------------------------------*/ 
get_header(); 
global $wpdb, $post, $opt_themes;
$image_id					= get_post_thumbnail_id(); 
$image_url					= wp_get_attachment_image_src($image_id,'full', true); 
$image_url_default			= $image_url[0];
$thumbnail_images			= $image_url;
$post_id					= get_the_ID();
$url						= wp_get_attachment_url( get_post_thumbnail_id($post->ID), '64' );
$defaults_no_images			= $opt_themes['ex_themes_defaults_no_images_']['url'];
$thumb_id					= get_post_thumbnail_id( $id );
if ( '' != $thumb_id ) {
$thumb_url					= wp_get_attachment_image_src( $thumb_id, '64', true );
$image						= $thumb_url[0];
	} else {
$image						= $defaults_no_images;
	}
$urlimages2					= $image;

$thumbnails_gp				= get_post_meta( $post->ID, 'wp_poster_GP', true );
$thumbnails					= str_replace( 'http://', '', $thumbnails_gp );
$thumbnails					= str_replace( 'https://', '', $thumbnails_gp );
$randoms					= mt_rand(0, 3);
$cdn_thumbnails				= '//i'.$randoms.'.wp.com/'.$thumbnails.'';
$thumbnails					= get_post_meta( $post->ID, 'wp_poster_GP', true );
$version					= get_post_meta( $post->ID, 'wp_version_GP', true );
$versionX1					= get_post_meta( $post->ID, 'wp_version_GP', true );
$versionX					= '-';
if ( $version === FALSE or $version == '' ) $version = $versionX;
$wp_mods					= get_post_meta( $post->ID, 'wp_mods1', true );
$wp_mods1					= get_post_meta( $post->ID, 'wp_mods', true );
if ( $wp_mods === FALSE or $wp_mods == '' ) $wp_mods = $wp_mods1;

$updates					= get_post_meta( $post->ID, 'wp_updates_GP', true );
$updatesX1					= get_post_meta( $post->ID, 'wp_updates_GP', true );
$updatesX					= '-';
if ( $updates === FALSE or $updates == '' ) $updates = $updatesX;	
$desck_GPs					= get_post_meta( $post->ID, 'wp_desck_GP', true ); 
if ( $desck_GPs === FALSE or $desck_GPs == '' ) $desck_GPs = $post->post_content;	
$des_post					= trim(strip_tags( $desck_GPs ));
$des_post					= trim(strip_tags( $desck_GPs ));
$des_post					= preg_replace('~[\r\n]+~', '', $des_post);
$des_post					= str_replace('"', '', $des_post);
$des_post					= mb_substr( $des_post, 0, 200, 'utf8' );
$user_info					= get_userdata(1);
$username					= $user_info->user_login;
$first_name					= $user_info->first_name;
$last_name					= $user_info->last_name;
$display_name				= $user_info->display_name;

$sidebar_on					= $opt_themes['sidebar_activated_'];
$style_2_on					= $opt_themes['ex_themes_home_style_2_activate_'];
$background_on				= $opt_themes['ex_themes_backgrounds_activate_'];
$thumbnails_gp_small_slider	= get_post_meta( $post->ID, 'wp_poster_GP', true ); 
$thumbnails					= str_replace( 'http://', '', $thumbnails_gp_small_slider );
$thumbnails					= str_replace( 'https://', '', $thumbnails_gp_small_slider );
$randoms					= mt_rand(0, 3);
$cdn_thumbnails_gp_small_slider = '//i'.$randoms.'.wp.com/'.$thumbnails.'=s30';
$thumbnails_on				= $opt_themes['aktif_thumbnails'];
$rtl_on						= $opt_themes['ex_themes_activate_rtl_'];
$rtl_homes					= $opt_themes['rtl_homes'];
$cdn_on						= $opt_themes['ex_themes_cdn_photon_activate_'];
$title_on					= $opt_themes['ex_themes_title_appname'];
$info_new_style_on			= $opt_themes['ex_themes_style_2_activate_'];
$svg_icon					= $opt_themes['svg_icon_downloadx'];
$text_download				= $opt_themes['exthemes_Download'];
$gp_id_on					= get_post_meta( $post->ID, 'wp_GP_ID', true );
$title_ps					= get_post_meta( $post->ID, 'wp_title_GP', true );
$version_ps					= get_post_meta( $post->ID, 'wp_version_GP', true );
$mod_ps						= get_post_meta( $post->ID, 'wp_mods', true ); 
$whatnews_ps				= get_post_meta( $post->ID, 'wp_whatnews_GP', true );
$title_whatnews				= $opt_themes['exthemes_Whats_NewAPK'];
$download_notices_on		= $opt_themes['activate_download_notices'];
$notice_6					= $opt_themes['exthemes_download_times_notice_6'];
$notice_7					= $opt_themes['exthemes_download_times_notice_7'];
$notice_downloads			= $opt_themes['notice_download_pages'];
$thumbs_on						= $opt_themes['aktif_thumbnails']; 
$cdn_on							= $opt_themes['ex_themes_cdn_photon_activate_']; 
$rtl_on							= $opt_themes['ex_themes_activate_rtl_']; 
$ratings_on						= $opt_themes['ex_themes_activate_ratings_']; 
$text_mods						= $opt_themes['exthemes_MODAPK']; 
$rated_gps						= get_post_meta( $post->ID, 'wp_rated_GP', true );
$mod_gps						= get_post_meta( $post->ID, 'wp_mods', true );
$mod_gps_alt					= 'Original APK';
$svg_mods_on					= $opt_themes['svg_icon_modx'];  
$appname_on						= $opt_themes['ex_themes_title_appname'];  
$title							= get_post_meta( $post->ID, 'wp_title_GP', true );
$title_alt						= get_the_title();
$comment_on						= $opt_themes['ex_themes_comments_activate_'];  
$background_on					= $opt_themes['ex_themes_backgrounds_activate_'];
$ukuran							= '=w1400';
$random							= mt_rand(0, 2); 
$full							= 'full'; 
$thumbnails_bg 					= wp_get_attachment_image_src(get_post_meta( $post->ID, 'background_images', true),$full);
$thumbnails_bg_alt				= get_post_meta( $post->ID, 'wp_backgrounds_GP', true ); 
$thumbnails_bg_alts				= get_post_meta( $post->ID, 'wp_images_GP', true );	
?>
<div id="content post-id-<?php the_ID(); ?> post-view-count-<?php ex_themes_set_post_view_(); ?><?= ex_themes_get_post_view_(); ?>" class="site-content" itemscope itemtype="https://schema.org/SoftwareApplication"> 
 
	<div class="container">
		<?php if($sidebar_on) { ?><div class="row"><?php } ?>
			<?php if($sidebar_on) { ?><main id="primary" class="col-12 col-lg-8 content-area"><?php } else { ?><main id="primary" <?php if($style_2_on) { ?>class="content-area"<?php } else { ?>class="content-area mx-auto" style="max-width: <?php if($style_2_on) { ?> 900px<?php } else { ?> 820px<?php } ?>"<?php } ?>><?php } ?>
				
				<?php if($style_2_on) { ?><article class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mx-auto mb-3" style="max-width: <?php if($style_2_on) { ?> 900px<?php } else { ?> 820px<?php } ?>;">
				
				<?php } 
				get_template_part('include/breadcrums_up'); 
				if($gp_id_on){ 
				if($style_2_on) { } else { ?> 
				<h1 class="h5 font-weight-semibold text-truncate text-center mb-4"><?php if ($title) { if($appname_on) { echo ucwords($title); } else { echo $title_alt; } } else { echo $title_alt; } ?></h1>
				
				<?php } 
				get_template_part('include/background'); 
				if($style_2_on) { ?>
				<div class="d-flex align-items-center px-0 px-md-3 mb-3 mb-md-4 <?php if($rtl_on){ ?>ml-3<?php } else{ ?><?php } ?>">
				<div class="flex-shrink-0 <?php if($rtl_on){ ?>ml-3<?php } else{ ?>mr-3<?php } ?>" style="width: 4.5rem;">
				<img src="<?php if($thumbs_on) { if($cdn_on) { echo $cdn_thumbnails_gp_small_slider; } else { if($thumbnails_gp_small_slider) { echo $thumbnails_gp_small_slider; } else { echo $image_url[0]; } } } else { if (has_post_thumbnail()) { echo $image_url[0]; } else { echo $defaults_no_images; } } ?>" class="rounded-lg wp-post-image" alt="<?php if ($title) { if($appname_on) { echo ucwords($title); } else { echo $title_alt; } } else { echo $title_alt; } ?>" loading="lazy" style="max-width: 100%;max-height: 72px;" > </div>
				<div>
				<h1 class="lead font-weight-semibold"><?php if ($title) { if($appname_on) { echo ucwords($title); } else { echo $title_alt; } } else { echo $title_alt; } ?></h1>
				<time class="text-muted d-block "><em><?php echo ucfirst($display_name); ?>, <?php echo get_the_time('l, F j, Y '); echo edit_post_link( __( 'edit post', THEMES_NAMES ), ' ', ' ' ); ?></em> </time> 
				</div>				
				</div>
				
				<div class="px-0 px-md-3">
				<div class="small bg-light rounded pt-2 px-3 mb-3 entry-content" style="padding-bottom: 1px; margin-top: 1.5rem;">
				<p><em><?php echo strip_tags($des_post); ?></em></p>
				</div>
				<?php get_template_part('include/info_apk_new'); ?>
				</div>
				
				<?php }
				if($style_2_on) { } else { 
				if($info_new_style_on) {
				get_template_part('include/info_apk_2');
				} else {
				get_template_part('include/info_apk');
				} }
				
				if($gp_id_on){ ?>
				<a class="btn btn-secondary btn-block mb-3" href="#download" rel="nofollow" ><?php if($svg_icon) { echo $svg_icon; } ?>
				<span class="align-middle"><?php if($text_download){ echo $text_download; } ?></span>
				</a> 
				<?php } } else { ?> 	
				<h1 class="h5 font-weight-semibold text-truncate mb-2"><?php if ($title) { if($appname_on) { echo ucwords($title); } else { echo $title_alt; } } else { echo $title_alt; } ?> <?php if ($version_ps) { ?>v.<?php echo $version_ps; } else { } ?> <?php if ($mod_ps) { ?>(<?php echo trim(strip_tags($mod_ps)) ?>)<?php } ?></h1>
				<div class="small font-weight-medium text-muted mb-3">
				<em><?php echo ucfirst($display_name); ?>, <?php echo get_the_time('l, F j, Y '); echo edit_post_link( __( 'edit post', THEMES_NAMES ), ' ', ' ' ); ?></em>  
				</div>	
				 
				 
				<div class="text-center mb-3">
				<img width="100%" height="100%" src="<?php if($thumbs_on) { if($cdn_on) { echo $cdn_thumbnails_gp_small_slider; } else { if($thumbnails_gp_small_slider) { echo $thumbnails_gp_small_slider; } else { echo $image_url[0]; } } } else { if (has_post_thumbnail()) { echo $image_url[0]; } else { echo $defaults_no_images; } } ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" style="height: 50%!important;max-height: 300px;"/>
				</div> 
				<?php } ?> 
				<div class="mb-3"><?php ex_themes_banner_single_ads_(); ?></div>
				<?php get_template_part('include/info_mod'); ?>
				
				<?php 
				if($style_2_on) {				
				if ($whatnews_ps) {
				?>
				<section class="mb-4">
				<<?php if($rtl_on){ ?>h3<?php } else{ ?>h2<?php } ?> class="h5 font-weight-semibold mb-3"><?php if($style_2_on) { ?><?php } else { ?><span class="border-bottom-2 border-secondary d-inline-block pb-1"><?php } if($title_whatnews) { echo $title_whatnews; } if($style_2_on) { } else { ?></span><?php } ?></<?php if($rtl_on){ ?>h3<?php } else{ ?>h2<?php } ?>>
				<div class="alert" style="background-color: ghostwhite;">				
				<div class="w-100" style="text-transform: capitalize;"><?php echo $whatnews_ps; ?></div>
				</div>				 
				</section>
				<?php } else { 
				} } else {} ?>
				
				<div id='entry-content' class="mb-3 entry-content  <?php if($rtl_on){ ?>ml-3<?php } else{ ?><?php } ?>">
				<?php if( have_posts() ) { while( have_posts() ) { the_post(); the_content(); }} ?> 
				</div>
				
				<?php if($style_2_on) {} else { 
				if ($whatnews_ps) { ?>
				<div class="mb-3">				 
				<h2 class="h5 font-weight-semibold mb-3"><?php if($style_2_on) { } else { ?><span class="border-bottom-2 border-secondary d-inline-block pb-1"><?php } if($title_whatnews) { echo $title_whatnews; } if($style_2_on) { } else { ?></span><?php } ?></h2>
				<div class="w-100" style="text-transform: lowercase;"><?php echo $whatnews_ps; ?></div>
				</div>				 
				<hr>
				<?php } } ?>
				
				<div class="mb-3">
				<?php ex_themes_poster_img_sliders_(); ?>
				</div>
				<?php if($gp_id_on){ 
				get_template_part('include/info_rating'); ?><br>
				<?php } 
				if($gp_id_on){ ?>
				<center>
				<a name="download"></a>
				<h2 id="download_url_links" class="h5 font-weight-semibold mb-3" ><?php if($text_download){ echo $text_download; } ?> <?php if($title_on) { echo ucwords($title_ps); } else { the_title(); } ?></h2>
				</center>
				<?php }  ?>
				
				
				<div class="mb-3">
				<center><?php ex_themes_banner_single_ads_2(); ?></center>
				</div>	
				<?php if($gp_id_on){ 
				get_template_part('include/info_download'); 
				} 
				if($download_notices_on){ ?>
				<div class="small mb-3">
				<p><?php if($notice_6){ echo $notice_6; } ?> <strong><em><?php echo $title_ps; ?></em></strong> <?php if($notice_7){ echo $notice_7; } ?></p>
				<?php echo $notice_downloads; ?>
				</div>
				<?php }
				get_template_part('include/telegram'); 
				if(function_exists('kk_star_ratings')) { ?>
				<div class="text-center d-flex align-items-center justify-content-center py-3 mb-3">
				<?php echo kk_star_ratings(); ?>
				</div>
				<?php }
				if (shortcode_exists( 'rns_reactions' )) {
				echo do_shortcode( '[rns_reactions]' );
				} 
				?>
				<div class="text-center border-top border-bottom d-flex align-items-center justify-content-center py-3 mb-3">
				<?php ex_themes_blog_shares_2(); ?>
				</div>			
				
				<?php 
				$post_tags = get_the_tags();
                if ( ! empty( $post_tags ) ) {
                    echo '<span class="tags-links md-3"> ';
                    foreach( $post_tags as $post_tag ) { 
					echo '<a href="' . get_tag_link( $post_tag ) . '" title="' . $post_tag->name . ' tag" rel="tag">#' . $post_tag->name . '</a>'; 
					}
                    echo '</span>';
                } else { }
				if($style_2_on) { ?></article><?php } 
				ex_themes_related_posts_(); 
				if($comment_on){ 
				comments_template(); 
				} ?>
			</main>
<?php  /* get_template_part('include/info_slider_new'); */ ?>
		
<?php if($sidebar_on) { ?><!--sidebar--><aside id="secondary" class="col-12 col-lg-4 widget-area"><?php get_sidebar(); ?></aside><!--sidebar--><?php } ?>
			
		<?php if($sidebar_on) { ?></div><?php } 
		get_template_part('include/breadcrumbs_down'); ?>
	</div>
</div>
<?php get_footer(); 