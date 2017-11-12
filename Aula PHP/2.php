<?php

require_once ('conexao.inc.php'); 
$db = new PDO ("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass );

$nome = "Felipe Almeida"; 
$nota1 = 8.5;
$nota2 = 10;

$sql = 'INSERT INTO alunos
        (nome, nota1, nota2)
        VALUES (:nome, :nota1, :nota2)'; 


$stmt = $db->prepare($sql); 
$stmt->execute (['nome'=>$nome, 'nota1'=>$nota1, 'nota2'=>$nota2]);
$ultimo_id = $db->lastInsertID(); 

echo 'Registro realizado com sucesso: ' .$ultimo_id;