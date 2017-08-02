<?php

switch ($_REQUEST['tipo']):
    case"lista": return listaCarros();
        break;
    case"salva": return salvaCArro();
        break;
    case"modelo": return Modelo();
        break;
    case"atualiza": return Atualiza();
        break;
endswitch;











function Atualiza() {
    $uri = Pagina("ApiAtualizaDados");
        
    $channel = curl_init($uri);
    curl_setopt($channel, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($channel, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($channel, CURLOPT_POSTFIELDS,$_REQUEST);
    curl_setopt($channel, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($channel, CURLOPT_CONNECTTIMEOUT, 10);
     
    $resultado = curl_exec($channel);
    $statusCode = curl_getInfo($channel, CURLINFO_HTTP_CODE);
    curl_close($channel);
     
    $cc;
    $x= explode("&",$_REQUEST['dados']);
    
    foreach ($x as $c):
        //$c= str_replace("+", "", $cc);
        $cc=$c;
    endforeach;
    
    echo json_encode(array("sucesso"=>"1",json_encode($c)));
     
   ///print_r($resultado);
    
    
    
    
    
}








function Modelo() {
    $url = Pagina("apiModeloCarro");
    $url = $url . "&acesso=1";
    $url = $url . "&modelo=" . $_GET['modelo'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $resultado = curl_exec($ch);
    curl_close($ch);
    echo $resultado;
}

function listaCarros() {
    $url = Pagina("apilistadecarros");
    $url = $url . "&acesso=1";
    //echo $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $resultado = curl_exec($ch);
    curl_close($ch);
    echo $resultado;
}

function salvaCArro() {
    $url = Pagina("Cadastradadoscarros");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);

    //$param = array($_POST);
    $param['acesso'] = 1;
    $param['modelo'] = $_POST['modelo'];
    $param['ano'] = $_POST['ano'];
    $param['descricao'] = $_POST['descricao'];
    $param['marca'] = $_POST['marca'];

    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $resultado = curl_exec($ch);
    curl_close($ch);

    echo $resultado;
}

function Pagina($titulo = "") {
    $x = get_page_by_title("$titulo", "ARRAY_A", "page");
    $x = get_permalink($x["ID"]);
    return $x;
}
