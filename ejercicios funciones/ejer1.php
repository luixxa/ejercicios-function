<?php 
fuction esPalindromo($palabra){
    $formato = preg_replace("(â - za - z0 - 9)" , "" , $palabra);
    $formato = strolower ($formato);
    return $formato ===strrev($formato);
}
echo "ingrese la palabra";
$palabra = readline;
 
if(esPalindromo($palabra)){
    echo " $palabra es palindromo.\n";
}else{
    echo " $palabra no es un palindromo.\n";
}
?>