<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
</head>
<body>
    <h2>Nombre:<?= $nombre ?></h1>
    <h2>Correo:<?= $correo ?></h1>
    <h2>DUI:<?= $dui ?></h1>

    <table border="1">
        <thead>
            <th>Mes</th>
            <th>Cuota</th>
            <th>Interes</th>
            <th>Capital</th>
            <th>Saldo Pendiente</th>
        </thead>
        <tbody>
            <tr>
                <?php $capital_actual = $capital; ?>
                <?php for($i = 1; $i <= $cuotas; $i++ ){ ?>
                    <?php $cuota_a = $capital_actual*($interes*(1+$interes)^($i))/((1+$interes)^($i) - 1); 
                        $capital_actual -= $cuota_a;
                    ?>
                    <td><?= $i ?></td>
                    <td><?php echo $cuota_a;  ?></td>
                    <td></td>
                    <td><?= $capital_actual ?></td>
                    <td></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>