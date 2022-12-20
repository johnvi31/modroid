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
global $opt_themes;
$rtl_on				= $opt_themes['ex_themes_activate_rtl_'];
$style_2_on			= $opt_themes['ex_themes_home_style_2_activate_'];
$rtl_homes			= $opt_themes['rtl_homes'];
$search_results		= $opt_themes['exthemes_Searchresults'];
$sidebar_on			= $opt_themes['sidebar_activated_'];
$text_not_found		= $opt_themes['exthemes_File_not_founds']; 
$search_term		= substr($_SERVER['REQUEST_URI'], 1);
$search_term		= urldecode(stripslashes($search_term));
$search_term		= rtrim($search_term, "/");
$find				= array("'.html'", "'.+/'", "'[-/_]'");
$replace			= " ";
$search_term		= trim(preg_replace($find, $replace, $search_term));
$search_term		= str_replace("%20", $replace, $search_term);
$search_term		= preg_replace('!\s+!', ' ', $search_term);

get_header(); ?>
<div id="content" class="site-content">
	<div class="py-2"> 
		<div class="container py-1">
			<ul id="breadcrumb" class="breadcrumb">
				<li class="breadcrumb-item home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php if($rtl_on){ echo $rtl_homes; } else { ?>Home<?php } ?>"><?php if($rtl_on){ echo $rtl_homes; } else { ?>Home<?php } ?></a></li>
				<li class="breadcrumb-item active"><?php if($search_results){ echo $search_results; } echo '&nbsp;';  echo $search_term; ?></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<?php if($sidebar_on) { ?><div class="row"><?php } else { ?><?php } ?>
			<?php if($sidebar_on) { ?><main id="primary" class="col-12 col-lg-8 content-area"><?php } else { ?><main id="primary" <?php if($style_2_on){ ?>class="content-area"<?php } else { ?>class="content-area mx-auto" style="max-width: <?php if($style_2_on){ ?> 900px<?php } else { ?> 820px<?php } ?>"<?php } ?>><?php } ?>
			<?php if($style_2_on){ ?><section class="bg-white border rounded shadow-sm pt-3 px-2 px-md-3 mb-3"><?php } else { ?> <?php } ?>
				<h1 class="h5 font-weight-semibold mb-3">
					<span class="<?php if($style_2_on){ ?>text-body<?php } else { ?>text-body border-bottom-2 border-secondary d-inline-block pb-1<?php } ?>">
						<?php if($search_results){ ?><?php echo $search_results; ?><?php } ?> <?php echo $search_term; ?> </span> 
				</h1>
				<div class="mb-4">
					<?php ex_themes_banner_header_ads_(); ?>
				</div>			 
				<div class="alert alert-dangers mb-4"><?php if($text_not_found){ echo $text_not_found; } ?> 
				</div>	
			<?php if($style_2_on){ ?></section><?php } else { ?> <?php } ?>					
			</main>
			<!--sidebar-->
			<?php if($sidebar_on) { ?><!--sidebar--><aside id="secondary" class="col-12 col-lg-4 widget-area"><?php get_sidebar(); ?></aside><!--sidebar--><?php } else { ?><?php } ?>
			
		<?php if($sidebar_on) { ?></div><?php } else { ?><?php } ?>
		<?php get_template_part('template/breadcrumbs'); ?>
	</div>
</div>
<?php get_footer();