<?php 
$codigo = ""; 
$longitud = 3; 
for ($i=1; $i<=$longitud; $i++){ 
$numero = rand(0,5); 
$codigo .= $numero; 
} 
echo "Codigo: <B>$codigo</B>"; 
?> 