
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Geometria: Encontre a área de um triângulo com base de 8 metros e altura 6 metros.</h1>
    <form method="POST"> 
        <label for="basedotriangulo"> Base do triângulo:</label>
        <input type="number" name="basedotriangulo" value="8">
        
        <label for="alturadotriangulo"> Altura do triângulo:</label>
        <input type="number" name="alturadotriangulo" value="6">

        <input type="submit" value="calcular">
    </form>
    
</body>
</html>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$basedotriangulo = $_POST['basedotriangulo'];
$alturadotriangulo = $_POST['alturadotriangulo'];

    require_once 'Geral.php';
    $geral = new Geral ();
    $geral->calcularareatriangulo($basedotriangulo, $alturadotriangulo);
    
}

?>
