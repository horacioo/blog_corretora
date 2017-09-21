<?php
add_action('add_meta_boxes', 'add_metabox_carga_horaria');

function add_metabox_carga_horaria() {
    add_meta_box(
            'link', //ID
            'Dados do Carro', //Título
            'Link_mb', //callback
            'page', //Post Type
            'normal', //Posição
            'default' //Prioridade
    );
}








function Link_mb() {
   global $post;
   $ano = get_post_meta($post->ID, "ano"); // $carga_horaria = get_post_meta($post->ID, 'carga_horaria', true);
   $marca = get_post_meta($post->ID, "marca");
   
   
    ?>
<label>ano</label><input type="number" style="width: 100%" name="ano" required="required" value="<?php echo $ano[0]; ?>"> 
<label>marca</label>
     <select name="marca">
         <option value="1" <?php if($marca[0]==1):echo "selected='selected'"; endif;?>>ford</option>
         <option value="2" <?php if($marca[0]==2):echo "selected='selected'"; endif;?>>gm</option>
         <option value="3" <?php if($marca[0]==3):echo "selected='selected'"; endif;?>>volks</option>
         <option value="4" <?php if($marca[0]==4):echo "selected='selected'"; endif;?>>chevrolet</option>
     </select>
    <?php
}
add_action('save_post', 'salva_link');

function salva_link() {
    global $post;
    update_post_meta($post->ID, 'ano', sanitize_text_field($_POST['ano']));
    update_post_meta($post->ID, 'marca', sanitize_text_field($_POST['marca']));
}

