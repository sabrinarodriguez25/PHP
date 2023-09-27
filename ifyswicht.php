<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h1>IF</h1>
    <hr>
  
    <?php
    $valor=rand(1,10);
    echo "El valor sorteado es $valor<br>";
    if ($valor<=5)
    {
        echo "Es menor o igual a 5";
    }
    else

    {
        echo "Es mayor a 5";

    }

    echo "<br>";

    #Define las variables $tipo, $grosor, $diametro y $marca. Establece que el tipo sea “Rueda de camión”,
    #el grosor 0.33, el diámetro 1.25 y la marca “Kimashuki”. Crea el código PHP donde a través de condicionales 
    #if realices la siguiente comprobación: si el diámetro es superior a 1.4 debe mostrarse por pantalla el mensaje
    #“La rueda es para un vehículo grande”. Si es menor o igual a 1.4 debe mostrarse por pantalla el mensaje 
    #“La rueda es para un vehículo pequeño”. En otro caso, debe mostrarse “No existe un tamaño de rueda válido”.

    $tipo="Rueda de camion";
    $grosor=0.33;
    $diametro=5;
    $marca="Kimashuki";

    if($diametro>1.4)
    {
        echo "la rueda es para vehiculo grande";
    }
    else if($diametro <=1.4)
    {
        echo "la rueda es para vehiculo pequeño";
    }
    else
    {
        echo "no existe un tamaño de rueda valido";
    }




    
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
    <h1>SWICHT</h1>
    <hr>
    <?php
     $rnd= rand(0,3);
     echo $rnd,"<br>";
     if($rnd==0){
         echo "El número es cero";
     }elseif($rnd==1){
         echo "El número es uno";
     }elseif($rnd==2){
         echo "El número es dos";
     }else{
         echo "El número es tres";
     }

     echo "<br>";

     
#Considera estás desarrollando una web donde trabajas con tipos de motor (suponemos que se trata del tipo de motor de una bomba para mover fluidos). Define una variable $tipoMotor y asígnale valor 3. Los valores posibles son 1, 2, 3, 4. A través de un condicional switch haz lo siguiente:

#a)      Si el tipo de motor es 0, mostrar un mensaje indicando “No hay establecido un valor definido para el tipo de bomba”.

#b)      Si el tipo de motor es 1, mostrar un mensaje indicando “La bomba es una bomba de agua”.

#c)       Si el tipo de motor es 2, mostrar un mensaje indicando “La bomba es una bomba de gasolina”.

#d)      Si el tipo de motor es 3, mostrar un mensaje indicando “La bomba es una bomba de hormigón”.
#e)      Si el tipo de motor es 4,mostrar un mensaje indicando “La bomba es una bomba de pasta alimenticia”.

#f)       Si no se cumple ninguno de los valores anteriores mostrar el mensaje “No existe un valor válido para tipo de bomba”.
 

$tipoMotor=rand(0,4);
echo $tipoMotor,"<br>";

if($tipoMotor===0){
    echo "No hay establecido un valor definido para el tipo de bomba";
}
elseif($tipoMotor==1){
    echo "La bomba es una bomba de agua";
}
elseif($tipoMotor==2){
    echo "La bomba es una bomba de gasolina";
}
elseif($tipoMotor==3){
    echo "La bomba es una bomba de hormigón";
}
elseif($tipoMotor==4){
    echo "La bomba es una bomba de pasta alimenticia";
}
else
{
    echo "No existe un valor válido para tipo de bomba";
}


   ?>
</body>
</html>