<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title></title>
    </head>
    <body>
        <?php
            $nome_removido = $_GET["nome_removido"];
            $nome_editado = $_GET["nome_editado"];
            $idade_editado = $_GET["idade_editado"];
            $endereco_editado = $_GET["endereco_editado"];

            include('conexao_bd.php');

            $sql = "UPDATE animais  SET WHERE Nome = '$nome_editado', Idade = '$idade_editado', 
            Endereco = '$endereco_editado' WHERE R_A = $ra";
                
            $query = mysqli_query($conexao_bd, $sql);
                    if($query){
                        //echo "<a href= 'menu.php'>Voltar</a>";

                    }else{
                        echo mysqli_error($conexao_bd);
                    }

                    

                    header("location:lista_animais.php");
                    mysqli_closer($conexao_bd);
        ?>
    </body>
</html>