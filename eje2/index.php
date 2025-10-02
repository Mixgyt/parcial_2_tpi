<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "post"){
            echo $_POST["nombre"];
        }
    ?>
    <form action="" action="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono">
        <label for="fecha">Fecha</label>
        <input type="text" name="fecha">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>