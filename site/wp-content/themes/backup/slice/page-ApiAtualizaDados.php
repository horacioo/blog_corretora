<?php

$dadosx = array();
$x = file_get_contents('php://input');
$infox = explode("--------------------------", $x);
foreach ($variaveis as $v):
    $d = explode($v.'"', $x);
    $dx = explode("-",$d[1]);
    $arr = trim($dx[0]);
    $dadosx[$v]=$arr;
endforeach;

$dadosx['id']=$dadosx['carro_escolhido'];
$dadosx['sucesso']=1;








require_once"class/carro.php";
$carro = new carro();
//$dados = $_POST['dados'];

$carro->id_paginas_adm = $dadosx['id'];
$carro->ano = $dadosx['ano'];
$carro->marca = $dadosx['marca'];
$carro->modelo = $dadosx['modelo'];
$carro->descricao = $dadosx['descricao'];

$dadosx['id_paginas_adm']=$carro->id_paginas_adm;
$dadosx['marcax']=$carro->marca;
$dadosx['modelox']=$carro->modelo;
$dadosx['descricao']=$carro->descricao;

//echo json_encode($dadosx);


$carro->AtualizaDadosCarro($dados);
echo json_encode(array("sucesso"=>1,"x"=>$dadosx));
//echo json_encode(array("sucesso"=>$carro->sucesso));
