<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Conecta banco de dados</title>
    </head>
    <body>
        <?php
            $conexao_bd = mysqli_connect("localhost", "tainara", "123456");

                if(!$conexao_bd){
                    echo mysqli_connect_error($conexao_bd);
                }

                $seleciona_bd = mysqli_select_db($conexao_bd, "petshop");
                
                if(!$seleciona_bd){
                    echo mysqli_error($conexao_bd);
                }

        ?>
    </body>
</html>