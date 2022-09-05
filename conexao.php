<?php

$utilizadores = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $utilizadores, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>