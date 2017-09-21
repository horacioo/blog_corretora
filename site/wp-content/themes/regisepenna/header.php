<?php
$url_tema = get_template_directory_uri();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"  rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php wp_head(); ?>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>
        <div class="container-fluid">
            <header>
                <div class="row">
                    <div class="col-lg-3  col-md-3 col-sm-3  col-xs-8">
                        <?php if (function_exists('the_custom_logo')) {the_custom_logo();}?>
                        <!--<img width="100%" src="<?php echo $url_tema; ?>/img/logoRegis.png">-->
                    </div>

                    <div class="col-lg-5  col-md-4 col-sm-5  col-xs-12">
                        <div class="row"><h2><?php echo bloginfo('title'); ?></h2></div>
                        <div class="row"><?php echo bloginfo('description'); ?></div>
                    </div>
                    <div class="col-lg-3  col-md-2 col-sm-3  col-xs-12"><?php get_search_form() ?></div>
                </div>
            </header>