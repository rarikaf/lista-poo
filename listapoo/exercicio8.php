
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    <h1>Problema de Proporção: Se 3 camisas custam R$60, quanto custarão 5 camisetas?</h1>
    <form method="POST"> 
        <label for="quantidadecamisas"> Quantidade de camisas:</label>
        <input type="number" name="quantidadecamisas" value="3">
        
        <label for="precototal"> Preço total (R$):</label>
        <input type="number" name="precototal" value="60">
        
        <label for="novaquantidade"> Nova quantidade de camisetas:</label>
        <input type="number" name="novaquantidade" value="5">
        
        <input type="submit" value="calcular">
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$quantidadecamisas = $_POST['quantidadecamisas'];
$precototal = $_POST['precototal'];
$novaquantidade = $_POST['novaquantidade'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral->calcularproporcao($quantidadecamisas, $precototal, $novaquantidade);
    
}

?>
