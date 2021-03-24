<?php
include("Conexao.php");



try{
    if(empty($_POST['email']) || empty($_POST['password'])){
        throw new Exception('Campo email e senha devem ser preenchidos com dados válidos');

    }else{

        $stmtSelect = $conexao->prepare('SELECT * FROM USUARIO WHERE EMAIL = :email and SENHA = :password');
        $stmtSelect->bindValue(':email', $_POST['email']);
        $stmtSelect->bindValue(':password', $_POST['password']);
        $stmtSelect->execute();

        $_SESSION['login'] = $stmtSelect->fetch();

        if($stmtSelect->rowCount() > 0){
            header('Location: telaprincipal.html');
        }
    }
}catch(\Exception $e){
    echo 'Erro ao realizar login ', $e->getMessage();
}

