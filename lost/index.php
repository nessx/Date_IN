<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INDEX.PHP DEL FRMK DAW-M7</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Hola</h1>

        <?php
            include_once 'app.php';

            $url = $_GET["url"];
            $url = rtrim($url, "/");
            $params = explode('/', $url);

            $app = new app($params);    
        ?>
    </body>
</html>