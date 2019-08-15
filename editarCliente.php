<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php include("scripts.php"); ?>
<?php

    $conexao =new PDO('mysql:host=localhost; dbname=crud', "root", "");
    $id_cliente = $_POST['dados'];

    $cliente = $conexao-> prepare("SELECT * FROM clientes WHERE id='".$id_cliente."' ");
    $cliente->execute();

    $fetch = $cliente->fetchAll();
    
    echo '
            <input type="text" id="nome" value="'.$fetch[0]['nome'].'"/>
            <br>
            <input type="text" id="email" value="'.$fetch[0]['email'].'"/>
            <br>
            <br>

            <a id="atualizar" aid="'.$fetch[0]['id'].'" style="background:#f00; padding:10px; color:#fff; cursor: pointer"> Salvar </a>
            <br>
            <br>
    ';
?>