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
    
    $x = 3;
    $dados = $_REQUEST['dados'];
    $data = array(
        'first_name' => 'John',
        'segundo_name' => 'John',
        'terceiro_name' => 'John',
    );
    $x = http_build_query($data);
    $url = Pagina("ApiAtualizaDados");
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($curl);
    echo $response;
    curl_close($ch);
    
    
    
    
    /*
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      //curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'PUT');
      curl_setopt($ch, CURLOPT_POST, 1);

      $param=$dados;
      curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      $resultado = curl_exec($ch);
      curl_close($ch);
      echo $resultado;

     */
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
