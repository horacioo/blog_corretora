<ul class="lista_noticias_lateral_ul">
    <?php
    $args = array('post_type' => 'post', 'post_parent' => "0", "offset" => "3", "posts_per_page" => "3", 'orderby' => 'date');
    $my_posts = get_posts($args);
    foreach ($my_posts as $post): setup_postdata($post);

        $titulo = get_the_title();
        $resumo = get_the_excerpt();
        $id = get_the_ID();
        $categories = get_the_category($id);
        $thumb = get_the_post_thumbnail($id, $size = 'medium', array("class" => "img-responsive")/* , array("class" => "img-responsive") */); //

        $categoria = (array) $categories[0];
        $_SESSION["dados"][] = $id;
        ?>

        <li>
            <?php echo $thumb ?>
            <span class="NoticiaHomeLateral">
                <h2><?php echo $titulo; ?></h2>
                <small><?php echo $resumo; ?></small>
            </span> 
        </li>
        <?php
    endforeach;
    ?>
</ul>

