<?php get_header();?>


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
<?php get_footer()?>