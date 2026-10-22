<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Problema das Idades:Se João tenm o dobrobda iade de Maria e Maria tem 20 anos, qual a iade de João?</h1>
    <form method="POST">
        <label for= "idadedemaria"> Informe a idade de Maria:</label>
        <input type="number" name="idademaria">
        <input type="submit" value= "calcular">
        
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$idademaria = $_POST ['idademaria'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $idadejoao = $geral-> calcularIdadeMaria($idademaria);
    
    echo "<h2>A idade de João é: $idadejoao anos</h2>";
    }






?>