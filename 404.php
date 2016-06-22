<!DOCTYPE html>
<html class="no-js" lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
<?php 

global $post; 
?>

<meta charset="<?php bloginfo('charset');?>"/>  
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="<?php echo $tif_option['favicon']['url']; ?>" type="image/x-icon" />    
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="wrapper-404">
        <div class="container">
            <div class="grid">
                <div class="row cells12 txt-404">
                <div class="cell"><span class="mif-rocket mif-4x"></span></div>
                    <div class="cell colspan11">
                            <h1>Ooops... Error 404</h1>
                            <h2>We are sorry, but the page you are looking for does not exist.</h2>
                            <p>Please check entered address and try again or <a href="<?php bloginfo('url');?>"><button>Go to Homepage</button></a> <p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>