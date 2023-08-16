<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Digite la siguiente información:</h1>

    <form action="metodo_get.php" method="get">
        Nombre:
        <input type="text" name="Nombre"/>
        <br>
        Fecha:
        <input type="date" name="Fecha"/>
        <br>
        Observación:
        <input type="text" name="obs"/>
        <br>
        <input type="submit" value="Enviar"/>

    </form>

    <h2>La información enviada es:</h2>
    <?php
    print_r($_GET);
    ?>

    
</body>
</html>