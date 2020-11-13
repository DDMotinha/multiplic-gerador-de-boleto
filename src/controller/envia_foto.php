<html>
    <head>
        <title>Envia foto</title>
    </head>
    <body>
        <?php

            $nome_temporario=$_FILES["Arquivo"]["tmp_name"];
            $nome_real=$_FILES["Arquivo"]["name"];
            copy($nome_temporario,"../../boletos/$nome_real");

            $link = 'http://multiplicfibra.com.br/boleto/boletos/'.$nome_real.'';

            echo $link;
            
        ?>
    </body>
</html>