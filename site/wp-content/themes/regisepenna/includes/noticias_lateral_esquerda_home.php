<div class="row">
    <h2>Últimas notícias</h2>
    <div class="col-md-12">
        <!---------->
        <ul>
            <?php
            $Dados = array();
            $linha = 0;
            $args = array('post_type' => 'post', 'post_parent' => "0", "offset" => 6, "posts_per_page" => "3", 'orderby' => 'date');
            $my_posts = get_posts($args);
            foreach ($my_posts as $post): setup_postdata($post);
                $linha++;
                $data = get_the_date();
                $titulo = get_the_title();
                $resumo = get_the_excerpt();
                $id = get_the_ID();
                $categories = get_the_category($id);
                $thumb = get_the_post_thumbnail($id, $size = 'thumbnail', array("class" => "img-responsive")/* , array("class" => "img-responsive") */); //
                $categoria = get_the_category();
                $link = get_permalink();

                $categoria = (array) $categories[0];
                $dadosz[] = $id;
                $_SESSION["dados"][] = $id;
                ?>
                <li class="listagem_noticias">
                    <div class="thumb_categoria col-sm-3">
                        <a href="<?php echo get_category_link($categoria[0]->term_id); ?>" class="link_limpo"><?php print_r($categoria[0]->slug); ?></a>
                        <?php echo $thumb; ?>
                    </div>
                    <div class="texto_resumo_outras_noticias col-sm-9">
                        <h3><a href="<?php echo $link ?>" class="link_limpo" class="link_limpo" ><?php echo $titulo ?>!!</a></h3>
                        <span><a href="<?php echo $link ?>" class="link_limpo"><?php echo $resumo ?></a></span>
                    </div>
                </li>      
                <?php
            endforeach;
            ?><?php wp_reset_postdata(); ?>
        </ul>
        <!---------->
    </div>


    <!-------------------------->
    <!-------------------------->
    <!-------------------------->


<div class="col-md-12"><?php dynamic_sidebar('lateral_blog_esquerda_widget'); ?></div>
</div>