<?php if(is_single()) { ?>
	<?php global $opt_themes; if($opt_themes['ex_themes_banner_sidebar_ads_activate_']){ ?><?php echo $opt_themes['ex_themes_banner_sidebar_ads_code_']; ?><?php } ?>
	<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : endif;  ?>
	<?php } else { ?>
	<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-home-1') ) : endif;  ?>
	<?php global $opt_themes; if($opt_themes['ex_themes_banner_sidebar_ads_activate_']){ ?><?php echo $opt_themes['ex_themes_banner_sidebar_ads_code_']; ?><?php } ?>
	<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?>
	<?php } else { ?>
	<?php global $opt_themes; if($opt_themes['aktif_categorie_sidebar_1']) { ?>
	<?php global $opt_themes; if($opt_themes['categorie_sidebar_1']){ ?><?php echo $opt_themes['categorie_sidebar_1']; ?><?php } ?>	
	<?php } else { ?>
	<?php } ?>		
	<?php } ?>	
	<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?>
	<?php global $opt_themes; if($opt_themes['aktif_categorie_sidebar_1_new_style']) { ?>
	<?php global $opt_themes; if($opt_themes['categorie_sidebar_1_new_style']){ ?><?php echo $opt_themes['categorie_sidebar_1_new_style']; ?><?php } ?>
	<?php } else { ?>	
	<?php } ?>	
	<?php global $opt_themes; if($opt_themes['aktif_categorie_sidebar_2_new_style']) { ?>
	<?php global $opt_themes; if($opt_themes['categorie_sidebar_2_new_style']){ ?><?php echo $opt_themes['categorie_sidebar_2_new_style']; ?><?php } ?>
	<?php } else { ?>	
	<?php } ?>	
	<?php } else { ?>
	<?php } ?>
	<?php global $opt_themes; if($opt_themes['ex_themes_home_style_2_activate_']) { ?>
	<?php } else { ?>
	<?php global $opt_themes; if($opt_themes['aktif_categorie_sidebar_2']){ ?>
	<?php global $opt_themes; if($opt_themes['categorie_sidebar_2']){ ?><?php echo $opt_themes['categorie_sidebar_2']; ?><?php } ?>
	<?php } else { ?>
	<?php } ?>
	<?php } ?>
	<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-home-2') ) : endif; ?>
<?php } ?>	