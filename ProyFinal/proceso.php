<?php
$archivo = fopen("datosCrudos.txt","r") or die ("Error al leer archivo");
$cero = 0;
$uno = 0;
$dos = 0;
$tres = 0;
$cuatro = 0;
$cinco = 0;
while (!feof($archivo)){
    $linea = fgets($archivo);
    
    
    if ($linea == 0) {
        $cero ++;
    }
    elseif  ($linea == 1) {
        $uno ++;
    }
    elseif ($linea == 2) {
        $dos ++;
    }
    elseif ($linea == 3) {
        $tres ++;
    }
    elseif ($linea == 4) {
        $cuatro ++;
    }
    elseif ($linea == 5) {
        $cinco ++;
    }

}
print ("Viviendas con 0 pantallas: ".$cero);
echo "<br>";
print ("Viviendas con 1 pantalla: ".$uno);
echo "<br>";
print ("Viviendas con 2 pantallas: ".$dos);
echo "<br>";
print ("Viviendas con 3 pantallas: ".$tres);
echo "<br>";
print ("Viviendas con 4 pantallas: ".$cuatro);
echo "<br>";
print ("Viviendas con 5 pantallas: ".$cinco);
