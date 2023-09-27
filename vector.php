<?php

$numeros[]=9;
$numeros[]=30;
$numeros[]=14;
$numeros[]=1;
$numeros[]=8;
$numeros[]=11;

#$vector=[1,8,5,7,4,98,64,40];


$confirmacion= FALSE;

while ($confirmacion== False) {

    $confirmacion=True;
    
    for ($i=0; $i <count($numeros)-1; $i++) { 
        if($numeros[$i]>$numeros[$i+1]){
            $auxi=$numeros[$i];
            $numeros[$i]=$numeros[$i+1];
            $numeros[$i+1]=$auxi;
            $confirmacion=False;


    }
    
}





}

print_r($numeros);



?>