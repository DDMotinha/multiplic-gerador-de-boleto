<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./src/style/index.css" type="text/css" rel="stylesheet">
        <title>Gerador de link boleto</title>
    </head>
    <body>
        <div class="container">
            <div>
                <img class="image" src="./src/assets/logo_multiplic.png"></img>
            </div>                                  
            <div class="formulario">
                <form action="./src/controller/envia_foto.php" method="post" enctype="multipart/form-data">
                    <input class="input1"type="file" name="Arquivo" id="Arquivo"><br>
                    <input class="input2" type="submit" value="Enviar">
                    <input class="input3" type="reset" value="Apagar">
                </form>
            </div>
        </div>
    </body>
</html>