<div class="conteudo">
    <h2>Teste de sucesso</h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
         the_title();
    the_content(); // displays whatever you wrote in the wordpress editor
  endwhile; endif; //ends the loop
 ?>
</div>