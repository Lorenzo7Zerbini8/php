<?php
$pers = array();
for ($i= 0; $i<5; $i++)
{
    $pers[$i]= rand();
            
}
echo "<p>Elemento 1: ";
echo  $pers[0];
echo "<p>Elemento 2: ";
echo  $pers[1];
echo "<p>Elemento 3: ";
echo  $pers[2];
echo "<p>Elemento 4: ";
echo  $pers[3];
echo "<p>Elemento 5: ";
echo  $pers[4];



?>
<br>
<br>
<?php
   $sum =0;
   foreach ($pers as $i) 
   {
       $sum += $i;
   }
   echo "la somma è ";
   echo $sum;
?>

