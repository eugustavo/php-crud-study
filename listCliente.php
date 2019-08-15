<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php include("scripts.php"); ?>

<?php
    echo '<h1> Clientes </h1>';

    $conexao =new PDO('mysql:host=localhost; dbname=crud', "root", "");
    $sqlSelect = $conexao->prepare("SELECT * FROM clientes");
    $sqlSelect->execute();
    $fetchAll = $sqlSelect->fetchAll();

        foreach( $fetchAll as $clientes){
            echo '
                <span> Nome do Cliente: </span> '.$clientes['nome'].' <br/>
                <span> Email do Cliente: </span> '.$clientes['email'].' <br/>

                <br>
                <form action="editarCliente.php" method="post">
                    <input type="hidden" name="dados" value="'.$clientes['id'].'" />
                    <button> Editar </button>
                </form>
            ';
        }

?>