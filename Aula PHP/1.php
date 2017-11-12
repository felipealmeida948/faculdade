<?php

require_once ('conexao.inc.php'); 
$db = new PDO ("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass );

$sql = 'SELECT id, nome, nota1
        FROM alunos
        WHERE nota1 >=5
            AND nome LIKE "%J%"
        ORDER BY nome'; 

        foreach($db->query($sql) as $row) {
            echo $row ['id'].' '; 
            echo $row ['nome'].' '; 
            echo $row ['nota1'].' '; 
            echo '<hr>'; 
        }