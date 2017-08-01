<?php

global $wpdb;

require_once 'class/carro.php';
$carro = new carro();


add_action('init', 'myStartSession', 1);

function myStartSession() {
    session_start();
}

add_filter('widget_text', 'do_shortcode');
add_post_type_support('page', 'excerpt');
add_post_type_support('post', 'excerpt');
add_theme_support('post-thumbnails');


add_action('after_setup_theme', 'instalacao_tema');

function instalacao_tema() {
    global $carro;
    foreach ($carro->paginasInformacao as $p):
        CriaCadastro_de_carros($p);
    endforeach;
    print($carro->id_paginas_adm);
    //exit("parando um pouco");
}



function link_Pagina($titulo = '') {
    $x = get_page_by_title("$titulo", "ARRAY_A", "page");
    $x = get_permalink($x["ID"]);
    return $x;
}

function CriaCadastro_de_carros($title) {
    global $carro;
    $total = $carro->localiza_post($title)->total;
    if (is_null($total) || $total==0)://if ($total !=0 || !is_null($total) ):
        $pagina = array(
            "post_title" => $title,
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_content' => 'nao deletar, esta pagina é essencial para o funcionamento do sistema,'
        );
        $x = wp_insert_post($pagina);
        $carro->id_paginas_adm[]=$x; //id_paginas_adm
    endif;
}

function EditorTinyMce($nome = '', $id = '', $conteudo = '') {
    $settings = array(
        'wpautop' => TRUE, //Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
        'media_buttons' => TRUE, //Whether to display media insert/upload buttons
        'textarea_name' => $nome, // The name assigned to the generated textarea and passed parameter when the form is submitted.
        'media_uploads' => TRUE,
        'textarea_rows' => get_option('default_post_edit_rows', 10), // The number of rows to display for the textarea
        'tabindex' => '', //The tabindex value used for the form field
        'editor_css' => '', // Additional CSS styling applied for both visual and HTML editors buttons, needs to include <style> tags, can use "scoped"
        'editor_class' => '', // Any extra CSS Classes to append to the Editor textarea
        'teeny' => false, // Whether to output the minimal editor configuration used in PressThis
        'dfw' => false, // Whether to replace the default fullscreen editor with DFW (needs specific DOM elements and CSS)
        'tinymce' => true, // Load TinyMCE, can be used to pass settings directly to TinyMCE using an array
        'quicktags' => true, // Load Quicktags, can be used to pass settings directly to Quicktags using an array. Set to false to remove your editor's Visual and Text tabs.
        'drag_drop_upload' => true //Enable Drag & Drop Upload Support (since WordPress 3.9) 
    );
    wp_editor("", $id, $settings);
}

if (is_admin()): require_once 'includes/metaBoxe.php'; endif;





add_action( 'pre_get_posts' ,'chr_hide_pages' );
function chr_hide_pages( $query ) {
    global $carro;
      if( !is_admin() )
      return $query;
      global $pagenow;
   if( 'edit.php' == $pagenow && ( get_query_var('post_type') && 'page' == get_query_var('post_type') ) )
      $query->set( 'post__not_in', array($carro->id_paginas_adm) ); 
      return $query;
   }
 
   
   
  $variaveis = array("ano","modelo","marca","descrição");