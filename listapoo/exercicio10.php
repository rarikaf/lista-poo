
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
    <h1>Sequência Numérica: Complete a sequência 1, 4, 9, 16, 25, ...</h1>
    <form method="POST"> 
        <input type="submit" value="Completar sequência">
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral->completarsequencia();
    
}

?>
