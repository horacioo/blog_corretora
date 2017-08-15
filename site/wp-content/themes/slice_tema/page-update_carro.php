<?php
header('Content-Type: application/json charset=utf-8');
$x = array("info_recebida"=>$_REQUEST);
echo json_encode($x);