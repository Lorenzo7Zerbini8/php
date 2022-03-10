<table border = "1"> 
    
      <?php 
           $p= 33;
           for ($i = 0; $i < 14; $i++) 
           {
           echo "<tr>";
           for ($j = 0; $j < 16; $j++) 
           {
              echo "<td>";
              echo chr($p);
              echo "</td>";
              $p++;
           }
            echo "</tr>";
           
   
           }
      ?>
    
    
</table >
