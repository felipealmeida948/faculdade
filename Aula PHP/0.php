<?php

require_once ('conexao.inc.php'); 
$db = new PDO ("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass );

var_dump ($db);

222 