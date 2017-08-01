<?php 

//$metodo = $_SERVER['REQUEST_METHOD'];
//$recurso = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
//$conteudo = file_get_contents(php://input);

//print_r(array("sucesso"=>1,"marca"=>$_SERVER['REQUEST_METHOD'],"dados"=>$_ENV ));

require_once 'class/carro.php';
   $x= file_get_contents('php://input');
   $info = explode("--------------------------",$x);
   foreach ($info as $i):
       echo"<br>";
       print_r($i);
   endforeach;

/*
$putdata = fopen("php://input", "r");
echo"<br><br><br>";
var_dump($putdata);
echo"<br><br><br>";
while ($data = fread($putdata,1024))
var_dump($data);   
  */



//echo"<br>". json_encode($_REQUEST);
/*
require_once"class/carro.php";
$carro = new carro();

$dados = $_POST['dados'];
$dados= urldecode($dados);


$carro->AtualizaDadosCarro($dados);
echo json_encode(array("sucesso"=>1));
//echo json_encode(array("sucesso"=>$carro->sucesso));
 
 */
