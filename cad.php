<?php
session_start(); 
$codigo = $_POST['codigo'];
$tipo = $_POST['tipo'];
$nome= $_POST['nome'];
$quant = $_POST['quant'];
$preco = $_POST['preco'];
$negoc = $_POST['negoc'];

$connect = mysql_connect('servidor','usuario','senha');
$db = mysql_select_db('cad');
if (!$conexao) 

$banco = mysql_select_db("cad",$conexao);
$query = "INSERT INTO `cad` ( 'codigo' , 'tipo' , 'nome' , 'quant' , 'preco' , 'negoc') 
VALUES ('$codigo', '$tipo', '$nome', '$quant', '$preco', '$negoc')";
mysql_query($query,$conexao); 

echo "Seu cadastro foi realizado com sucesso!";
?>  
	
