<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Probabilidade: Se você lançar um dado  de seis lados, qual é a probabilidade de sair um número ímpar?</h1>
    <form method="POST"> 
        <label for= "facesdodado"> Quantos lados tem um dado:</label>
        <input type="number" name="facesdodado">
        <input type="submit" value= "calcular">
        
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$facesdodado = $_POST ['facesdodado'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral-> proprabilidadenumeroimpar($facesdodado);
    
   
    }






?>