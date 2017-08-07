<?php 
$c = new carro();
$lista = $c->ListaCarros();
header('Content-Type: application/json');
echo json_encode($lista);  