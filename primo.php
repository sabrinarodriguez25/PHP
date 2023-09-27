<?php
$primo=2;

if ($primo <=1){
    echo "No es primo";

}else{
    $primo1=True;
    for ($i=2; $i <=sqrt($primo); $i++) { 
        if ($primo % $i ==0) {
            $primo1=False;
            break;
        }
    
        
    }
    if ($primo1) {

        echo "es primo";  
    }
    else {
        echo "no es primo";
    }
}







?>