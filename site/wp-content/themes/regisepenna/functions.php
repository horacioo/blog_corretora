<?php

add_action('init', 'myStartSession', 1);

function myStartSession() {
    session_start();
}

add_filter('widget_text', 'do_shortcode');
add_post_type_support('page', 'excerpt');
add_post_type_support('post', 'excerpt');
add_theme_support('post-thumbnails');

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 300,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );






function Thumb() {
    if (has_post_thumbnail()) { ?>
            <div class="col-lg-12 topo_conteudo" >
            <?php
                echo the_post_thumbnail($size = "large", array("class"=>"img-responsive img-thumbnail"));
                echo"<center><h2>"; echo the_title(); echo"</h2></center>";
                echo"</div>";
            } else { ?>
                <?php echo"<center><h2>"; echo the_title(); echo"</h2></center>";?>
            <?php }
    }
    






register_sidebar(array(
    "name" => "lateral_blog_home",
    "description" => "contéudo do cabeçalho",
    "id" => "cabecalho",
    "before_widget" => "<div class='conteudo_lateral_blog_home'>",
    "after_widget" => "</div>"
));


register_sidebar(array(
    "name" => "lateral_blog_esquerda_widget",
    "description" => "contéudo",
    "id" => "widget_esquerda",
    "before_widget" => "<div class='lateral_blog_esquerda_widget'>",
    "after_widget" => "</div>"
));






function listposts($atts) {
    $impede = $_SESSION['dados'];
    if(!isset($atts['categoria'])){return ;}
    
    $cat_cory = $atts['categoria'];
    
    
    //$atts = shortcode_atts(array('post__not_in' => $impede, 'post_type' => 'post', 'post_parent' => "0", "offset" => "0", "posts_per_page" => "4", 'orderby' => 'date'), $atts);
    $atts = shortcode_atts(array('post_type' => 'post', 'post_parent' => "0", "offset" => "0", "posts_per_page" => "4", 'orderby' => 'date'), $atts);
    
    $catposts = get_posts($atts);
    $noticias="";//$noticias = "<h2 class='categoria_noticias'>categoria: $cat_cory</h2>";
    $noticias .= "<ul>";
    foreach ($catposts as $single) {
        $single = (array) $single;
        $categoria = get_the_category($single["ID"]);
        $categoria = (array) $categoria[0];
        $categoria_nome = $categoria['slug'];
        /************************************************ */
       if ($cat_cory === $categoria_nome) {
            $categoria_id = $categoria['term_id'];
            $noticias .= '';
            $_SESSION['dados'][] = $single["ID"];
            
            $noticias .= "<li class='ShortCode_link'>"
                    . get_the_post_thumbnail($single["ID"], $size = 'thumbnail')
                    . "<a href='" . get_permalink($single["ID"]) . "'>" . $single["post_title"] . "--" . $categoria_nome . "-</a></li>";
       }
        /*********************************************** */
    }
    $noticias .= "</ul>";
    
    $cat_cory = str_replace(array("-","_"), " ", $cat_cory);
    $titulo="<a href='". get_category_link($categoria_id)."' class='LinkCategoria'>categoria: $cat_cory</a>";
    return $titulo.$noticias;
}

add_shortcode('noticias', 'listposts');
