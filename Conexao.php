<?php
session_status();
$conexao=null;
try{
    $conexao = new PDO("mysql:dbname=afc;host=localhost","root","");

}catch (PDOException $erro){
    echo "ERRO DE CONEXÃO".$erro->getMessage();
}