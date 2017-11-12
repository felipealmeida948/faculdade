<?php

require_once ('conexao.inc.php'); 
$db = new PDO ("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass );

$id = 6; 
$nome = 'Guilherme Ferraz'; 
$nota1 = 5; 

$sql = 'UPDATE alunos
        SET nome = :nome, nota1 = :nota1 
        WHERE id = :id'; 

$stmt = $db->prepare($sql); 
$stmt->execute (['nome'=>$nome, 'nota1'=>$nota1, 'id'=>$id]);