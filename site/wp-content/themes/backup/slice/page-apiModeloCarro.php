<?php
require_once 'class/carro.php';
$c = new carro();
#---------------------
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
#---------------------
$modelo = $_GET['modelo'];
$c->id_paginas_adm=$modelo;
$retorno = $c->ModeloCarro();
echo json_encode($retorno);