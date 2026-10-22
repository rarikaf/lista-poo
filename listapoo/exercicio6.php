
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <h1>Geometria Espacial: Calcule o volume de um cubo com aresta de 5 centímetros.</h1>
    <form method="POST"> 
        <label for="arestadocubo"> Aresta do cubo (centímetros):</label>
        <input type="number" name="arestadocubo" value="5">
        
        <input type="submit" value="calcular">
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$arestadocubo = $_POST['arestadocubo'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral->calcularvolumecubo($arestadocubo);
    
}

?>
