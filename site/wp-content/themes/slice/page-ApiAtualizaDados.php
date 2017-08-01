<?php

$dados = array();
$x = file_get_contents('php://input');
$infox = explode("--------------------------", $x);
foreach ($variaveis as $v):
    $d = explode($v.'"', $x);
    $dx = explode("-",$d[1]);
    $arr = trim($dx[0]);
    $dados[$v]=$arr;
endforeach;
print_r($dados);








require_once"class/carro.php";
$carro = new carro();

$dados = $_POST['dados'];
$dados= urldecode($dados);

/*
$carro->AtualizaDadosCarro($dados);
echo json_encode(array("sucesso"=>1));
//echo json_encode(array("sucesso"=>$carro->sucesso));
*/
