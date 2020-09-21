<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title></title>
    </head>
    <body>
    <?php
           include('conexao_bd.php');

           $cod_id = $_GET["id"];

           $sql = "SELECT * FROM animais WHERE id = $cod_id";
            
           $query = mysqli_query($conexao_bd, $sql);
           $resul = mysqli_fetch_assoc($query);

           echo '
                <form action="form_editar_animal.php" method="GET">
                    <fieldset>
                        <legend>Alteração dos dados dos Animais:</legend>
                            <label>Nome do animal:</label>
                            <input type="text" name="nome_animal" value="<?php echo $resul["nome_animal"]; ?>"/></br></br>

                            <label>Idade do animal:</label>
                            <input type="text" name="idade_editado" value ="<?php echo $resul["idade"]; ?>"/></br></br>

                            <label>Categoria do animail:</label>
                                <select name="categoria_editado" value ="<?php echo $resul["categoria_animal"]; ?>">
                                    <option value="cachorro">Cães</option>
                                    <option value="gato">Gatos</option>
                                    <option value="peixes">Peixes</option>
                                    <option value="passaros">Pássaros</option>
                                    <option value="roedores">Roedores</option>
                                </select></br></br>

                            <label>Raça do animal:</label>
                            <input type="text" name="raca_animal_editado" value="<?php echo $resul["raca"]; ?>"/></br></br>

                            <label>Tutor do animal:</label>
                            <input type="text" name="nome_tutor_editado" value="<?php echo $resul["dono_animal"]; ?>"/></br></br>

                            <label>Telefone do tutor:</label>
                            <input type="text" name="tel_tutor_editado" value="<?php echo $resul["telefone"]; ?>"/></br></br>

                            <label>Endereço do tutor:</label>
                            <input type="text" name="endereco_tutor_editado" value="<?php echo $resul["endereco"]; ?>"/></br></br>

                            <input type="hidden" id="cod_id" nome_animal="cod_id" value="<?php echo $cod_id?>" /> 
                            <input type="submit" name="submit" value="Alterar"/>
                    </fieldset>
                </form>
           ';


          include("fecha_conexao_bd.php");
          mysqli_close($conexao_bd);

            
        ?>
    </body>
</html>