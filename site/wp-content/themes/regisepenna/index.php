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
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-lg-3  col-md-3 col-sm-3  col-xs-8"><img width="100%" src="<?php echo $url_tema; ?>/img/logoRegis.png"></div>
                    <div class="col-lg-1  col-md-2 col-sm-1  col-xs-4"><img width="100%" src="<?php echo $url_tema; ?>/img/portoSeguroLogo.png"></div>
                    <div class="col-lg-5  col-md-4 col-sm-5  col-xs-12">
                        <div class="row"><h2>Notícias do mercado de seguros</h2></div>
                        <div class="row">Notícias do mercado de seguros</div>
                    </div>
                    <div class="col-lg-3  col-md-2 col-sm-3  col-xs-12"><?php get_search_form() ?></div>
                </div>
            </header>

            <hr>
            <div class="row conteudo">
                <div class="col-lg-7 col-md-7 " id="home_noticia_maior">
                    <?php get_template_part("includes/noticiaHome"); ?>
                </div>
                <div class="col-lg-5 col-md-5">
                    <?php get_template_part("includes/noticiaHomelateral"); ?>
                </div>
            </div>

            <hr> 

            <div class="fraseDeEfeito">
                apenas um teste apenas um teste apenas um teste apenas um teste apenas um teste apenas um teste 
            </div>


            <div class="row conteudo">
                <div class="col-md-7 lateral_esquerda">
                    <?php get_template_part("includes/noticias_lateral_esquerda_home"); ?>
                    <hr>
                </div>
                <div class="col-md-5"><?php dynamic_sidebar('lateral_blog_home'); ?></div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"><a href="#">teste</a></div>
                    <div class="col-lg-3"><a href="#">teste</a></div>
                    <div class="col-lg-3"><a href="#">teste</a></div>
                    <div class="col-lg-3"><a href="#">teste</a></div>
                </div>
            </div>
        </footer> 






        <?php
       
        ?>

        <?php
        ///print_r($_SESSION["dados"]);
        $_SESSION["dados"] = NULL;
        ?>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
