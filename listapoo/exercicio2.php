<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Sequencia Numérica: Qual será  os 3 próximos números na sequência 2, 4, 8, 16,...</h1>
    <form method="POST">
        <label for= "ultimonumero"> Informe o ultimo numero da sequência:</label>
        <input type="number" name="ultimonumero">
        <input type="submit" value= "calcular">
        
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$ultimonumero = $_POST ['ultimonumero'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral-> continuarsequencia($ultimonumero);
    
   
    }






?>