<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Fecha conexão banco de dados</title>
    </head>
    <body>
        <?php
            $query = mysqli_query($conexao_bd, $sql);

            if($query){

                echo "Aluno $nome cadastrado com sucesso!<br>";

            }else{
                echo mysqli_error($conexao_bd);
            }
            
            mysqli_close($conexao_bd);
        ?>
    </body>
</html>