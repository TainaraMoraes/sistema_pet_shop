<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro de Animais</title>
    </head>
    <body>  
        <?php
            include ("menu.inc");
                echo '
                    <form action="form_cadastro_animais.php" method="POST">
                        <fieldset>
                            <legend>Informe os dados dos animais:</legend>
                                <label>Nome do animal:</label>
                                <input type="text" name="nome_animal"/></br></br>

                                <label>Idade do animal:</label>
                                <input type="text" name="idade_animal"/></br></br>

                                <label>Categoria do animail:</label>
                                    <select name="categoria_animal">
                                        <option value="cachorro">Cães</option>
                                        <option value="gato">Gatos</option>
                                        <option value="peixes">Peixes</option>
                                        <option value="passaros">Pássaros</option>
                                        <option value="roedores">Roedores</option>
                                    </select></br></br>

                                <label>Raça do animal:</label>
                                <input type="text" name="raca_animal"/></br></br>

                                <label>Tutor do animal:</label>
                                <input type="text" name="nome_tutor"/></br></br>

                                <label>Telefone do tutor:</label>
                                <input type="text" name="tel_tutor"/></br></br>

                                <label>Endereço do tutor:</label>
                                <input type="text" name="endereco_tutor"/></br></br>

                                <input type="submit" value="Cadastrar"/>
                        </fieldset>
                    </form>
                ';
        ?>
    </body>
</html>