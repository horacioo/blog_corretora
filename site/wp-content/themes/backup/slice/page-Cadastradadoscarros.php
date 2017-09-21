<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

$modelo    =  $_REQUEST['modelo'];       //echo "\n modelo $modelo";
$ano       =  $_REQUEST['ano'];          //echo "\n ano $ano";
$descricao =  $_REQUEST['descricao'];    //echo "\n descrição $descricao";
$marca     =  $_REQUEST['marca'];        //echo "\n marca $marca";

//echo json_encode($_REQUEST);

if (!is_null($modelo) && !is_null($ano) && !is_null($descricao) && !is_null($marca)) :
    require_once 'class/carro.php';
    $c = new carro();
    $c->entrada=array("modelo"=>$modelo,"ano"=>$ano,"marca"=>$marca,"descricao"=>$descricao);
    $c->SalvaCarro($c->entrada);
    echo json_encode(array("retorno" => array("info" => 2, "casa" => 3, "acerto" => $c->sucesso)));
endif;