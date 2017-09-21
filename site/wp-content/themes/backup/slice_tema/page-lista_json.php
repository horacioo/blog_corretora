<?php
header('Content-Type: application/json');
require_once 'class/carro.php';
$c = new carro();
$lista = $c->ListaCarros();
echo json_encode($lista);