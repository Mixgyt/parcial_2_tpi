<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>
    <div style="margin:10px">
        <form action="calcular" method="post">
            <label for="capital">Capital de prestamo:</label>
            <input type="text" name="capital" required>
            <label for="interes"></label>
        </form>
    </div>
</body>
</html>