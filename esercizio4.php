<?php
$pers = array(64 ,17 ,46 ,50, 23, 92 );
echo "<p>Il numero estratto è: ";
echo  $pers[0];
echo "<p>Il numero estratto è: ";
echo  $pers[1];
echo "<p>Il numero estratto è: ";
echo  $pers[2];
echo "<p>Il numero estratto è: ";
echo  $pers[3];
echo "<p>Il numero estratto è: ";
echo  $pers[4];
echo "<p>Il numero estratto è: ";
echo  $pers[5];



?>
<br>
<br>

<?php
   $sum= 0;
   $min=$pers[0];
   $max= $pers[0];
   $media= 0;
   foreach ($pers as $i) 
   {
       $sum += $i;
       if ($i < $min)
       {
           $min = $i;
       }
       if ($i >= $max)
       {
           $max= $i;
       }
   }
   echo "la somma è ";
   echo $sum;
   
   echo"<br>";
   echo"<br>";
   
   $media =  $sum / count($pers);
   echo "la media è ";
   echo $media;
   
   echo"<br>";
   
   echo "il massimo è ";
   echo $max;
   
   echo"<br>";
   
   echo "il minimo è ";
   echo $min;
   
   
?>




