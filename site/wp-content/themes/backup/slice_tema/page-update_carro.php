<?php
$dados = $_REQUEST;
//$dados = (object) $dados;

print_r($dados);
/*
header('Content-Type: application/json charset=utf-8');
$x = array("info_recebida"=> $_REQUEST);
echo json_encode($x);