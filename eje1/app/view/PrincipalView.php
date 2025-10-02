<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>
    <div style="margin:10px">
        <?php if(isset($error)){?>
            <h2><?= $error ?></h2>
        <?php } ?>
    </div>
    <div style="margin:10px">
        <form action="calcular" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required>
            <label for="correo">Correo</label>
            <input type="text" name="correo" >
            <label for="dui">DUI</label>
            <input type="text" name="dui" >

            <br>
            <label for="capital">Capital:</label>
            <input type="number" name="capital" step="0.01" required>
            <label for="interes">Interes Mensual:</label>
            <input type="number" name="interes" step="0.01" required>
            <label for="cuotas">Cuotas Mensuales:</label>
            <input type="number" name="cuotas" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>