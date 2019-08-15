<?php
    $conexao =new PDO('mysql:host=localhost; dbname=crud', "root", "");
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $atualizaDados = $conexao->  prepare("UPDATE clientes SET 
                    nome='".$nome."', email='".$email."' ");
    $atualizaDados->execute();

        if($atualizaDados == true){
            echo 'Sucesso';
        }else{
            echo 'falha';
        }
?>