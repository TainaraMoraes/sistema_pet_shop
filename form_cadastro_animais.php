<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>ler cadastro de Animais</title>
    </head>
    <body>  
       <?php

            $nome = $_POST["nome_animal"];
            $idade = $_POST["idade_animal"];
            $categoria = $_POST["categoria_animal"];
            $raca = $_POST["raca_animal"];
            $nome_tutor = $_POST["nome_tutor"];
            $tel_tutor = $_POST["tel_tutor"];
            $endereco_tutor = $_POST["endereco_tutor"];
            
            include ("conexao_bd.php");

            $sql = "INSERT INTO animais (nome_animal, idade, categoria_animal, raca, dono_animal, telefone, endereco)
                    VALUES ('$nome', '$idade', '$categoria', '$raca', '$nome_tutor', $tel_tutor, '$endereco_tutor')";

            include ("fecha_conexao_bd.php");
       ?>
    </body>
</html>