


<?php

echo "Hola Mundo";
echo "<br>";
echo "Mi nombre es: sabrina rodriguez";
echo "<br>";
echo " tengo 19 años";
echo"<br>";



$frutas = array("limón", "naranja", "banana", "albaricoque");
sort($frutas);
foreach ($frutas as $clave => $valor) {
    echo "frutas[" . $clave . "] = " . $valor . "\n";
}

echo"<br>";
date_default_timezone_set("America/Bogota");

$hoy = date("F j, Y, g:i a"); 
echo $hoy;    
echo"<br>";     
echo $hoy;           
$hoy = date("m.d.y");   
echo $hoy;      
echo"<br>";                    
$hoy = date("j, n, Y");  
echo $hoy;    
echo"<br>";                     
$hoy = date("Ymd");        
echo $hoy;     
echo"<br>";                  
$hoy = date('h-i-s, j-m-y, it is w Day'); 
echo $hoy;    
echo"<br>";    
$hoy = date('\i\t \i\s \t\h\e jS \d\a\y.'); 
echo $hoy;    
echo"<br>";  
$hoy = date("D M j G:i:s T Y");         
echo $hoy;    
echo"<br>";      
$hoy = date('H:m:s \m \i\s\ \m\o\n\t\h'); 
echo $hoy;    
echo"<br>";    
$hoy = date("H:i:s");                  
echo $hoy;    
echo"<br>";       
$hoy = date("Y-m-d H:i:s");          
echo $hoy;             


echo "<br>";

$dia=date("d");
if ($dia>=10)
   { 
      echo "sitio activo";
   }
else
 { 
     echo "sitio fuera de servicio";
 }




?>