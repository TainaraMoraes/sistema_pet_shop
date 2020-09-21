<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title></title>
    </head>
    <body>
        <?php
            include ("conexao_bd.php");
                $cod_id = $_POST["nome_pesquisa"];
                $sql = "SELECT * FROM animais WHERE nome_animal = $cod_id";

                $query = mysqli_query($conexao_bd, $sql);
                if($query){
                    if(mysqli_num_rows($query) > 0){
                        
                        echo '<table border="1">;
                            
                                <tr>
                                    <th>Nome do Animal</th>
                                    <th>ID do Animal</th>
                                    <th>Idade do Animal</th>
                                    <th>Categoria do Animal</th>
                                    <th>Raça do Animal</th>
                                    <th>Nome do Tutor</th>
                                    <th>Telefone do Tutor</th>
                                    <th>Endereço do Tutor</th>
                                </tr>
                            ';
                        while(($resul = mysqli_fetch_assoc($query)) != null){

                            echo "<tr>";
                                echo "<td>" . $resul['nome_animal'] . "</td>";
                                echo "<td>" . $resul['id'] . "</td>";
                                echo "<td>" . $resul['idade'] . "</td>";
                                echo "<td>" . $resul['categoria_animal'] . "</td>";
                                echo "<td>" . $resul['raca'] . "</td>";
                                echo "<td>" . $resul['dono_animal'] . "</td>";
                                echo "<td>" . $resul['telefone'] . "</td>";
                                echo "<td>" . $resul['endereco'] . "</td>";
                            echo "</tr>";
                        }  
                        echo "</table>";          
                    }else{
                        echo "Não possui Animal com esse nome!<br>";
                        }
                    }else{
                        echo "Problema de sintaxe Bd";
                        echo mysqli_error($conexao_bd);
                    }

             mysqli_close($conexao_bd);
        ?>
    </body>
</html>