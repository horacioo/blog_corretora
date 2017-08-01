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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php wp_head(); ?>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <h2><?php bloginfo("title") ?></h2>
            </header>
            <?php get_template_part("includes/nav"); ?>
            <div>

                <section id="home_index_front_page">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">home</div>
                                <div class="panel-body">
                                    home page
                                </div>
                            </div>
                        </div>
                </section>
                <div class="row">
                    <section class="col-md-12" id="cadastro"><?php get_template_part("includes/cadastra_carros") ?></section>
                    <section class="col-md-12" id="carros"><?php get_template_part("includes/lista_carros") ?></section>
                    <section class="col-md-12" id="descricao"><?php get_template_part("includes/descricao_carros") ?></section>
                    <section class="col-md-12" id="carro_atualiza"><?php get_template_part("includes/atualizaDados") ?></section>
                    <section class="col-md-12" id="deleta">deleto um carro</section>
                </div>
            </div>
            <footer>rodape</footer>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            var caminho = "<?php echo link_Pagina("Requisicoes"); ?>";
            var listaCarros = "<?php echo link_Pagina("Requisicoes"); ?>";
            var DetalheCarro = "<?php echo link_Pagina("Requisicoes"); ?>";
            var AtualizaDados = "<?php echo link_Pagina("Requisicoes"); ?>";
        </script>
        <script src="<?php echo get_template_directory_uri() . "/js/salvaCarros.js"; ?>"></script>
        <script src="<?php echo get_template_directory_uri() . "/js/listaCarros.js"; ?>"></script>
        <script src="<?php echo get_template_directory_uri() . "/js/ModeloCarro.js"; ?>"></script>
        <script src="<?php echo get_template_directory_uri() . "/js/AtualizaCarro.js"; ?>"></script>
        <?php wp_footer(); ?>
    </body>
</html>
