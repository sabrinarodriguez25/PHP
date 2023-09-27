<?php

function fibonacci($cantidades){
    $secuencia=[];

    $numero1=0;
    $numero2=1;

    $secuencia[]=$numero1;
    $secuencia[]=$numero2;

    for($i=2; $i <$cantidades;$i++){
        $siguente=$numero1+$numero2;
        $secuencia[]=$siguente;

        $numero1=$numero2;
        $numero2=$siguente;
    }

    return $secuencia;

}

$cantidadT=10;
$resultado=fibonacci($cantidadT);

echo implode(',',$resultado);


?>