<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chat PHP</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        
        <h1>Chat em PHP</h1>
        <div class="historico">

        </div>

        <div class="painel">
            <!--<form action="index.php" name="chat" method="post" id="mensageiro">-->
                <input type="text" name="nick" id="nick" placeholder="Digite seu nick aqui"/> <br/>
                <input type="text" name="mensagem"  id="mensagem" placeholder="Sua mensagem aqui!"/> <br/>
                <input type="submit" id="enviar" value="Enviar!"/>
            <!--</form>-->
        </div>        

        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
    </body>
</html>