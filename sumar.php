<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Calculadora epica :D</h1>
<div id="contenedor">
    <form action="sumar.php" method="POST">
    <div>
        <input type="text" placeholder="Número 1" class="num1" name="num1">
    </div>
    <div>
        <input type="text" placeholder="Número 2" class="num2" name="num2">
    </div>
    <div>
        <button type="submit">sumar</button>
        <h1>RESULTADO: </h1>
    </div>
    </form>
<?php
if ($_POST)
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if (is_numeric($num1) && is_numeric($num2)) {
        $res = $num1 + $num2;
        echo "<h1 class='resul'>$res</h1>";
    } else {
        echo "<h1 class='resul'>Ingrese Numeros validos</h1>";
    }
}
?>
</div>
</body>
</html>