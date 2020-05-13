<?php

$n = $_POST['n'];
$x = $_POST['x'];

$n1 = $_POST['n1'];
$x1 = $_POST['x1'];


$seno1 = calcularSeno($n, $x);
echo "el seno de ".$x." es:  ".$seno1;
echo "<br>";
echo "<br>";
$coseno1 = calcularCoseno($n1, $x1);
echo "el coseno de ".$x1."  es:  ".$coseno1;

function calcularSeno($n, $x){
    $seno = 0;
    $parte1 = 0;
    $parte2 = 0;
    $parte3 = 0;

    for ($i=0; $i<=$n; $i++){
   
        $parte1 = 1;
        for($j=0; $j<2*$i+1; $j++){//ciclo que realiza la parte del dividendo
         $parte1 = $parte1 * $x;// la parte del dividendo se multiplicara por dato x
        }
        
        $parte2 = 1;
        for($j=1; $j<=2*$i+1; $j++){//ciclo que realiza la parte del divisor
         $parte2 = $parte2 * $j; // se multiplicaran los numeros del factorial
        }
        
        if($i%2 == 0){// si el exponencial es par el numero sera positivo
         $parte3 = 1;
        }else{
         $parte3 = -1;// si el exponencial es impar el numero sera negativo
        }
        $seno = $seno +($parte1 / $parte2) * $parte3; // se operara la formula de seno
       }

        return $seno;
}

function calcularCoseno($n, $x){
    $coseno = 0;
    $parte1 = 0;
    $parte2 = 0;
    $parte3 = 0;

    for ($i=0; $i<=$n; $i++){
   
        $parte1 = 1;
        for($j=0; $j<2*$i; $j++){//ciclo que realiza la parte del dividendo
         $parte1= $parte1 * $x;// la parte del dividendo se multiplicara por dato x
        }
        
        $parte2 = 1;
        for($j=1; $j<=2*$i; $j++){//ciclo que realiza la parte del divisor
         $parte2 = $parte2 * $j;// se multiplicaran los numeros del factorial
        }
        
        if($i%2==0){// si el exponencial es par el numero sera positivo
         $parte3 = 1;
        }else{
         $parte3 = -1;// si el exponencial es impar el numero sera negativo
        }
        $coseno = $coseno +($parte1 / $parte2) * $parte3;
       }
       return $coseno;
}



?>