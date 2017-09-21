<?php
$x = $_GET['id'];
$post = get_post($x);
$title = $post->post_title;
$descricao = $post->post_content;
$x = $y = get_post_meta($x);
?>

<h2>{{titulo}}</h2>
<p ng-model="update" ng-init="update='http://localhost/blog_da_corretora/site/update_carro'">{{update}}</p>
<p><label>titulo</label><input ng-init="tituloCarro = '<?php echo $post->post_title; ?>'"  ng-model="tituloCarro" type="text" name="titulo" value="<?php echo $post->post_title; ?>"></p>
<p><label>descrição</label><textarea ng-init="descricao = '<?php echo $post->post_content; ?>'" ng-model="descricao"><?php echo $post->post_content; ?></textarea></p>
<p><label>ano</label><input ng-init="ano_carro = '<?php echo $x['ano'][0]; ?>'" ng-model="ano_carro" integer type="number" name="ano" value="<?php echo $x['ano'][0] ?>"></p>
<p ng-init="ano = '<?php echo $x['marca'][0]; ?>'"><label>Marca</label>
    <select ng-model="ano">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</p>
<button ng-click="requisicao()">Alterar </button>
{{retorno}}
