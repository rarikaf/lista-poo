
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <h1>Geometria: Calcule o perímetro de um retângulo com lados de 7 metros e 12 metros.</h1>
    <form method="POST"> 
        <label for="lado1"> Primeiro lado (metros):</label>
        <input type="number" name="lado1" value="7">
        
        <label for="lado2"> Segundo lado (metros):</label>
        <input type="number" name="lado2" value="12">
        
        <input type="submit" value="calcular">
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral->calcularperimetroretangulo($lado1, $lado2);
    
}

?>
