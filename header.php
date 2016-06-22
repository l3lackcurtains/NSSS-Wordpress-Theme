<!DOCTYPE html>
<html class="no-js" lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>

<?php global $post; ?>
<meta charset="<?php bloginfo('charset');?>"/>	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title itemprop="name"><?php wp_title('|',true,'right'); bloginfo( 'name' );?></title>
<link rel="shortcut icon" href="<?php $att = tif_option('tif_opt_favicon') ; $attachment = wp_get_attachment_image_src( $att, 'full' ); ?>" type="image/x-icon" />	
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>

</head>

<?php if(is_archive()): ?>
    <body>
<?php else: ?>
    <body <?php body_class(); ?> >
<?php endif; ?>

<!-- First Header Section -->
<section class="header1-con">
       <div class="container">
            <div class="grid">
	           <div class="row cells2">
                        <div class="cell">
	                       <ul class="callout">
        	                    <?php if(tif_option('tif_opt_callout_phone')!=NULL):?><li><i class="fa fa-phone"></i><?php echo tif_option('tif_opt_callout_phone'); ?></li><?php endif;?>
                                <?php if(tif_option('tif_opt_callout_email')!=NULL):?><li><i class="fa fa-envelope"></i> <?php echo tif_option('tif_opt_callout_email'); ?></li><?php endif;?>                   
	                       </ul>
                        </div>
	                    <div class="cell"> 
                        <?php get_social_icons(); ?>                        
	               </div>               
	           </div>
        </div>
    </div>
</section>
<!-- / First header Section -->

<!-- Second Header Section -->
<section class="header2-con">
       <div class="container" >
            <div class="grid">
                <div class="row cells3">
                    <div class="cell">
                        <?php if( tif_option('tif_opt_logo_type') == 'text' ):?>
                            <div class="logo-text">
                            <a class="link link--mallki" href="<?php echo home_url();?>"><?php echo tif_option('tif_opt_logo_text');?><span data-letters="<?php echo tif_option('tif_opt_logo_text');?>"></span><span data-letters="<?php echo tif_option('tif_opt_logo_text');?>"></span></a
                            </div>
                        <?php elseif( tif_option('tif_opt_logo_type') == 'image'  ): ?>
                            <div class="logo-img"><?php $att = tif_option('tif_opt_logo_image') ; $attachment = wp_get_attachment_image_src( $att, 'full' ); ?><a href="<?php echo home_url();?>"><img src="<?php  echo $attachment[0];?>"></a></div>
                        <?php endif; ?>
                        </div>

                        <div class="cell"><!-- empty --></div>
                    <div class="cell">
                        <?php if( tif_option('tif_opt_banner_image') !=NULL ): ?>
                            <div class="banner-img"><?php $att = tif_option('tif_opt_logo_image') ; $attachment = wp_get_attachment_image_src( $att, 'full' ); ?><a href="<?php echo home_url();?>"><img src="<?php  echo $attachment[0];?>"></a></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- /Second Header Section -->

<!-- Third header section -->
<section class="header3-con">
       <div class="container">
            <div class="grid">
              <div class="row">
                    <div class="app-bar bg-transparent" data-role="appbar">
                        <?php if( has_nav_menu('primary') ): ?>
                            <ul class="app-bar-menu">
								<?php wp_nav_menu( array(
											'theme_location'=>'primary',
											'menu_class' => 'app-bar-menu',
											 'walker' => new samplesite_walker
											 ));
											 ?>
                            </ul>
                            <?php else: ?>
                            <a class="app-bar-element branding">Add primary navigation menu from tif theme setting!</a>
                            <?php endif ?>
                            <div class="app-bar-element place-right">
                                    <a class="dropdown-toggle fg-white"><i class="fa fa-search"></i></a>
                                 <div class="app-bar-drop-container bg-white fg-dark place-right" data-role="dropdown" data-no-close="true" style="width: 324px;">
                                <?php get_search_form();?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Third header section -->
<?php if(!is_home() && !is_front_page() ):?>
<div class="sub-header">
    <div class="container">
        <div class="grid">
            <div class="row cells2">
                <div class="cell"><h2><?php the_title(); ?></h2></div>
                    <div class="cell"><?php the_breadcrumb(); ?></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
