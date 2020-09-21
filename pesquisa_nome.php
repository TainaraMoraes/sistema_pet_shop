<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title></title>
    </head>
    <body>
        <?php
            include ("menu.inc");

            echo '
                <form action="form_pesquisa_nome.php" method="POST">
                    <fieldset>
                        <legend>Pesquisar o animal pelo nome:</legend>
                            <label></label>
                            <input type="text" name="nome_pesquisa"/>

                            <input type="submit" value="Pesquisar"/>
                    </fieldset>
                </form>
            ';
        ?>
    </body>
</html>