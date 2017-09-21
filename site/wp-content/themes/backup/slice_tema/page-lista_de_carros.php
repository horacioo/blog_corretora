<ul>
    <?php
    $x = link_Pagina("lista_json");
    $url = $x;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $resultado = curl_exec($ch);
    curl_close($ch);
    $resultado = (array) json_decode($resultado);
    foreach ($resultado as $x):
        ?>
    <li><a href="#/carro/<?php echo $x->id;?>"><?php print_r($x->titulo); ?></a></li>    
        <?php
    endforeach;
    ?>
</ul>
