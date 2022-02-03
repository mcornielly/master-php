<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  for ($i=1; $i <= 10; $i++) { ?>
        <table border="1" width="600">
            <tr>
                <th colspan="5" align="center">
                    Tabla de Multiplicar del <?php echo $i ?>
                </th>
            </tr>
            <?php  for ($b=1; $b <= 10; $b++) { ?>
                <tbody>
                    <tr align="center">
                        <td><?php echo $i ?></td>
                        <td>X</td>
                        <td><?php echo $b ?></td>
                        <td>=</td>
                        <td><?php echo ($i * $b) ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <br>
        <hr>
    <?php } ?>
</body>
</html>

