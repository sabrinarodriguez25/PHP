<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNCIONES</title>
</head>
<body>


<h1>RAND</h1>
<hr>
<?php
$num = rand(0, 1000);
echo $num;
echo "<br>";
if ($num <= 500) 
      {
      echo "El número es menor o igual a 500.";
      } 
else 
     {
     echo "El número es mayor a 500.";
  
  
    }

 echo "<br>";




    $balo1=rand(1,43);
    
    $balo2=rand(1,43);
    
    $balo3=rand(1,43);
    
    $balo4=rand(1,43);
    
    $balo5=rand(1,43);

    $superbalota=rand(1,16);

    echo "<br>";


    echo $balo1,"-",$balo2,"-",$balo3,"-",$balo4,"-",$balo5,"-",$superbalota;
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

<h1>ARRAYS</h1>
<hr>

<?php

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars); 

 echo "<br>";

$input = array(12, 10, 9);



$result = array_pad($input, 5, 0);

print_r ($result);



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
   <hr>
   <h1>RANGE</h1>
   

   <?php

foreach (range(0, 12) as $número) {
   echo  $número;
}
 
   ?>
</body>
</html>