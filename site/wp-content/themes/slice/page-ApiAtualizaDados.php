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

$dadosx['sucesso']=1;
echo json_encode($dadosx);






require_once"class/carro.php";
$carro = new carro();
//$dados = $_POST['dados'];

$carro->id_paginas_adm = $dados['id'];
$carro->ano = $dados['ano'];
$carro->marca = $dados['marca'];
$carro->modelo = $dados['modelo'];
$carro->descricao = $dados['descricao'];



/*
$carro->AtualizaDadosCarro($dados);
echo json_encode(array("sucesso"=>1));
//echo json_encode(array("sucesso"=>$carro->sucesso));
*/
