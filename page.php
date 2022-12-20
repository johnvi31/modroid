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
$sidebar_on					= $opt_themes['sidebar_activated_'];
$style_2_on					= $opt_themes['ex_themes_home_style_2_activate_'];
 
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
$thumbs_on					= $opt_themes['aktif_thumbnails']; 
$title						= get_post_meta( $post->ID, 'wp_title_GP', true );
$title_alt					= get_the_title();
?>
<div id="content post-id-<?php the_ID(); ?> post-view-count-<?php ex_themes_set_post_view_(); ?><?= ex_themes_get_post_view_(); ?>" class="site-content post-<?php the_ID(); ?>">
	 
	<div class="container">
		<?php if($sidebar_on) { ?><div class="row"><?php } else { ?><?php } ?>
			<?php if($sidebar_on) { ?><main id="primary" class="col-12 col-lg-8 content-area"><?php } else { ?><main id="primary" <?php if($style_2_on) { ?>class="<?php if($sidebar_on) { ?>col-12 col-lg-9 content-area<?php } else { ?>content-area<?php } ?>"<?php } else { ?>class="content-area mx-auto" style="max-width: <?php if($style_2_on) { ?> 900px<?php } else { ?> 820px<?php } ?>"<?php } ?>><?php } ?>
			<?php if($style_2_on) { ?><article class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mx-auto mb-3" style="max-width: <?php if($style_2_on) { ?> 900px<?php } else { ?> 820px<?php } ?>;"><?php } else { ?> <?php } ?>
			<?php get_template_part('include/breadcrums_page'); ?>	
				<h1 class="h5 font-weight-semibold mb-3"><?php echo $title_alt; ?></h1>
				<div class="mb-4 entry-content">
					<?php
					if( have_posts() ) : while( have_posts() ) : the_post();
					the_content();
					endwhile;
					endif;
					?>
				</div>
			<?php if($style_2_on) { ?></article><?php } ?>	
			</main>
			
			<?php if($sidebar_on) { ?><!--sidebar--><aside id="secondary" class="col-12 col-lg-4 widget-area"><?php get_sidebar(); ?></aside><!--sidebar--><?php } ?>
			
		<?php if($sidebar_on) { ?></div><?php } ?>
		<?php get_template_part('include/breadcrumbs_down'); ?>
	</div>
</div>
<?php get_footer(); 