<script>

    $(document).ready(function(){
        $("#salvar").on('click', function(){
            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: {
                    nome:$("#nome").val(),
                    email:$("#email").val()
                },
                beforeSend: function(){
                    $("#mensagens").html("Alguma coisa não esta acontecendo");
                },
                success: function(data){
                    $("#mensagens").html(data);
                },
                error: function(data){
                    $("#mensagens").html("Não foi possivel encontrar a página insert");
                }
            });
        });

        $("#atualizar").on('click', function(){
            var id = $(this).attr("aid");
            var nome = $("#nome").val();
            var email = $("#email").val();

            $.ajax({
                url: 'atualiza.php',
                type: 'POST',
                data: {id:id, nome:nome, email:email},
                beforeSend: function(){
                    $("#mensagens").html("Alguma coisa não esta acontecendo");
                },
                success: function(data){
                    $("#mensagens").html(data);
                },
                error: function(data){
                    $("#mensagens").html("Não foi possivel encontrar a página insert");
                }
            });
        });
    });
</script>