<?php
class Geral
{

    public function calcularidademaria($idademaria)
    {
        $joao = $idademaria * 2;
        return $joao;
    }


    public function continuarsequencia($ultimonumero)
    {
        $sequencia1 = $ultimonumero * 2;
        $sequencia2 = $sequencia1 * 2;
        $sequencia3 = $sequencia2 * 2;

        echo "<h2> Os próximos 3 números na sequência são: $sequencia1, $sequencia2, $sequencia3</h2>";
    }


    public function proprabilidadenumeroimpar($facesdodado)
    {
    
        $numeroimpar = $facesdodado / 2; 
       
        $probabilidade = ($numeroimpar / $facesdodado) * 100;
        
        echo "<h2> A Probabilidade de ser um número ímpar é de: $probabilidade %</h2>";
    }



public function calcularareatriangulo($basedotriangulo, $alturadotriangulo)
{
    
    $area = ($basedotriangulo * $alturadotriangulo) / 2; 
       
    echo "<h2> A área do triângulo é de: $area m²</h2>";
}



public function listarmultiplosde5()
{
    
    for ($i = 5; $i < 30; $i += 5) {
        echo "$i ";
    }
    
}



public function calcularvolumecubo($arestadocubo)
{
    
    $volume = $arestadocubo * $arestadocubo * $arestadocubo;
       
    echo "<h2> O volume do cubo é de: $volume cm³</h2>";
}



public function calcularvelocidademedia($distancia, $tempo)
{
    
    $velocidademedia = $distancia / $tempo;
       
    echo "<h2> A velocidade média é de: $velocidademedia km/h</h2>";
}


public function calcularproporcao($quantidadecamisas, $precototal, $novaquantidade)
{
    
    $precounitario = $precototal / $quantidadecamisas;
    $novopreco = $precounitario * $novaquantidade;
       
    echo "<h2> O preço de $novaquantidade camisetas será de: R$ $novopreco</h2>";
}


public function calcularperimetroretangulo($lado1, $lado2)
{
    
    $perimetro = 2 * ($lado1 + $lado2);
       
    echo "<h2> O perímetro do retângulo é de: $perimetro metros</h2>";
}


public function completarsequencia()
{
    
    $sequencia = [1, 4, 9, 16, 25];
    $proximo = 6 * 6;
    
    echo "<h2> A sequência numérica é: ";

    foreach ($sequencia as $numero) {
        echo "$numero, ";
    }

    echo "$proximo</h2>";
}



}
