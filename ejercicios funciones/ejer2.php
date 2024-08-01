<?php
fuction generarFibonacci ($n){
    if ($n <= 1) {
        return $n;
    }else{
        return generarFibonacci ($n-1) + generarFibonacci($n - 2);
    }
}

function obtenerSecuenciaFibonacci ($n){
    $secuencia = array();
    for ($i = 0; $i <= $n; $i++){
        $secuencia[]= generarFibonacci($1);
    }
}
echo "ingrese el numero fibonacci:  ";
$n = readline();

$secuencia =
obtenerSecuenciaFibonacci ($n);
print_r ($secuencia);
