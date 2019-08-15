<?php

    $conexao =new PDO('mysql:host=localhost; dbname=crud', "root", "");

    $sqlInsert = $conexao -> prepare("INSERT INTO clientes 
                                    (nome,  email)
                                    VALUES
                                    ('".$_POST['nome']."', '".$_POST['email']."')
                                    ");
    $sqlInsert->execute();

        if($sqlInsert == true){
            echo 'Sucesso';
        }else{
            echo 'Falhou';
        }
?>