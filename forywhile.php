<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FOR</h1>
    <hr>
    <?php
    for ($i=0; $i <=100 ; $i=$i+2)
    {
      echo "<br>";
      echo $i;
      $suma=$suma+$i;
    }
    echo "<br>";
    echo "la suma de los pares es $suma";
    echo "<br>";

    #IMPRIMIR Y MOSTRAR Y SUMAR LOS MÚLTIPLOS DE 3


    for($i=0; $i <100; $i=$i+3)
    {
        echo "<br>";
        echo $i;
        $suma1=$suma1+$i;
    }
    echo "<br>";
    echo "la suma de los impares es $suma1";
    echo "<br>";

    #IMPRIMIR Y MOSTRAR Y SUMAR LOS MÚLTIPLOS DE 5 
    for($i=0; $i <100; $i=$i+5)
    {
        echo "<br>";
        echo $i;
        $suma2=$suma2+$i;
    }
    echo "<br>";
    echo "la suma de los impares es $suma2";
    echo "<br>";



    ?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WHILE</h1>
    <hr>

    <?php


$valor=rand(1,100);
$inicio=1;
while($inicio<=$valor)
{
  echo $inicio;
  echo "<br>";
  $inicio++;
}

echo "<br>";



$numeroAleatorio = rand(1, 100);


$suma = 0;


$contador = 1;

while ($contador <= $numeroAleatorio) {

    if ($contador % 7 == 0) {
       
        $suma += $contador;
        echo $contador . " ";
    }
    
  
    $contador++;
}

echo "La suma total de los múltiplos de 7 es: " . $suma;





    



    ?>
</body>
</html>