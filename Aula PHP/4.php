<?php

require_once ('conexao.inc.php'); 
$db = new PDO ("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass );

$id = 6;

$sql = 'DELETE FROM alunos
        WHERE id = :id';

$stmt = $db->prepare ($sql);
$stmt->execute(['id' => $id]);  

