<?php
require './php/Conexao.php';

    if(empty($_SESSION)){
        header('Location:index.html');
    }
    $stmtSelect = $conexao->prepare('SELECT *
                                             FROM usuario');
    $stmtSelect->execute();
    $usuario = $stmtSelect->fetchAll();

    if (!empty($_POST['seq'])){
        $seq        = $_POST['seq'];
        $nome       = $_POST['nome'];
        $senha      = $_POST['senha'];
        $endereco   = $_POST['endereco'];
        $cidade     = $_POST['cidade'];
        $estado     = $_POST['estado'];
        $cep        = $_POST['cep'];
        $redeSocial = $_POST['redesocial'];

        $stmtSelect->bindValue(':seq',$seq);
        $stmtSelect->bindValue(':nome',$nome);
        $stmtSelect->bindValue(':senha',$senha);
        $stmtSelect->bindValue(':endereco',$endereco);
        $stmtSelect->bindValue(':cidade',$cidade);
        $stmtSelect->bindValue(':estado',$estado);
        $stmtSelect->bindValue(':cep',$cep);
        $stmtSelect->bindValue(':redesocial',$redeSocial);
        $stmtSelect->execute();

        header('Location:telaprincipal.html');

    }

