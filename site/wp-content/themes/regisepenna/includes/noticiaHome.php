<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

        <?php
        $Dados = array();
        $linha = 0;
        $args = array('post_type' => 'post', 'post_parent' => "0", "posts_per_page" => "3", 'orderby' => 'date');
        $my_posts = get_posts($args);
        foreach ($my_posts as $post): setup_postdata($post);
            $linha++;

            $data = get_the_date();
            $titulo = get_the_title();
            $resumo = get_the_excerpt();
            $id = get_the_ID();
            $categories = get_the_category($id);
            $thumb = get_the_post_thumbnail($id, $size = 'large', array("class" => "img-responsive")/* , array("class" => "img-responsive") */); //
            $thumb = get_the_post_thumbnail_url($id);

            $categoria = (array) $categories[0];
            $dados[] = $id;
            $_SESSION["dados"] = $dados;
            ?>

            <div class="item <?php if ($linha == 1) { ?>active<?php } ?>" style="bac">
                <img src="<?php echo $thumb ?>" class="imagem_caroussel">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php echo $titulo; ?></h1>
                        <p><?php echo $resumo; ?></p>
                    </div>
                </div>
            </div>

            <?php
        endforeach;
        ?>
    </div>
    <?php wp_reset_postdata(); ?>
    <!------

   



    -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->