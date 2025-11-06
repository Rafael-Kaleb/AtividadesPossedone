<?php
    require_once 'Calculadora.php';

    $calcula = new Calculadora(10 , 20);
    $calcula->somarNumeros();
    $calcula->subtrairNumeros();
    $calcula->multiplicarNumeros();
    $calcula->dividirNumeros();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Calculadora</h3>
    <form>
        <input type="number" name="numero1" />
        <br/> <br/>
        <input type="number" name="numero2" />
        <br/> <br/>
        <input type="submit" value="+" name="" />
        <input type="submit" value="-" name="" />
        <input type="submit" value="x" name="" />
        <input type="submit" value="÷" name="" />
    </form> 
</body>
</html>