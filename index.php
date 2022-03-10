<html> 
<head> <title> Hello World in PHP </title> </head> <body> 
<?php 
echo "<p> Hello, World ! </p>";
echo "<p> Questo e ’ un frammento di codice PHP . Nota che fa parte di un documento HTML standard!</p>"; ?> 
    <table border = "1"> 
<tr><th> Personaggio </th></tr> 

<?php 
$pers = array ("pippo","pluto","paperino","topolino" ); foreach ( $pers as $nome ) { 
    if(strpos($nome, "paperino")!==false){
echo " <tr><td> $nome </td></tr>\n"; 
    }
} 
?> 
</table >
<table border = "1" > 
<tr><th> Chiave </th ><th> Personaggio </th> </tr> 
<?php 
$pers = array ("a"=>"pippo" ,"b" =>"pluto" , "c"=>"paperino" ,"d"=>"topolino" ); foreach ( $pers as $idx => $nome ) { 
echo " <tr><td> $idx </td><td > $nome </td> </tr>\n"; 
} 
?> 
</table >
<a href="welcome.php">WELCOME</a>
<a href="esercizio.php">ESERCIZIO1</a>

</body> 
</html>