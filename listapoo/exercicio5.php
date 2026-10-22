
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <h1>Problema de Múltiplos: Liste os múltiplos de 5 menores que 30.</h1>
    <form method="POST"> 
        <input type="submit" value="Listar múltiplos">
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral->listarmultiplosde5();
    
}

?>
