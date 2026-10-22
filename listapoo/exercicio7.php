
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <h1>Problema de Taxa: Se você percorrer 120 quilômetros em 2 horas, qual é a sua velocidade média?</h1>
    <form method="POST"> 
        <label for="distancia"> Distância percorrida (quilômetros):</label>
        <input type="number" name="distancia" value="120">
        
        <label for="tempo"> Tempo gasto (horas):</label>
        <input type="number" name="tempo" value="2">
        
        <input type="submit" value="calcular">
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$distancia = $_POST['distancia'];
$tempo = $_POST['tempo'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral->calcularvelocidademedia($distancia, $tempo);
    
}

?>
