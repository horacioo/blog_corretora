<div class="conteudo">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            $id = get_the_ID();
            echo "<h2>";the_title();echo"</h2>";
            echo "<hr>detalhes"; the_content();
            $x = $y = get_post_meta($id);
            echo "<p>ano: "; print_r($x['ano'][0]);
            echo "<p>marca: "; print_r($x['marca'][0]);
        endwhile;
    endif;
    ?>
    <hr><a href="#/editar/<?php echo $id; ?>">editar</a>
</div>