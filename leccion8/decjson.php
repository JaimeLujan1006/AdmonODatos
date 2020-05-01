<?php

$agenda = '{"Nombre ":"Lucia","Apellidos":"Lirios","Fecha de nacimiento":"06/01/78","Estado civi":"Casada","Origen":"Nepal"}'; 
$vuelos = '{"origen":"Istambul","destino":"Tokyo","duracion":"700"}';
$peliculas = '{"Id":"5467","Titulo":"La campaña","Año":"2012","Genero":"Drama","Clasificacion":"B"}';

$objAgeF = json_decode($agenda, false);
$objVueF = json_decode($vuelos, false);
$objPelF = json_decode($peliculas, false);

$objAgeT = json_decode($agenda, true);
$objVueT = json_decode($vuelos, true);
$objPelT = json_decode($peliculas, true);

var_dump($objAgeF);
echo '<br>';
var_dump($objAgeT);
$objAge = json_decode($agenda);
echo '<br>';
echo "Objeto estandar:";
echo '<br>';
echo $objAge->Apellidos;
echo '<br>';
echo $objAge->Origen;
echo '<br>';
$arrAge = json_decode($agenda, true);
echo "Arreglo asociativo:";
echo '<br>';
echo $arrAge["Apellidos"];
echo '<br>';
echo $arrAge["Origen"];
echo '<br>';
echo '<br>';


var_dump($objVueF);
echo '<br>';
var_dump($objVueT);
$objVue = json_decode($vuelos);
echo '<br>';
echo "Objeto estandar:";
echo '<br>';
echo $objVue->origen;
echo '<br>';
echo $objVue->destino;
echo '<br>';
$arrVue = json_decode($vuelos, true);
echo "Arreglo asociativo:";
echo '<br>';
echo $arrVue["origen"];
echo '<br>';
echo $arrVue["destino"];
echo '<br>';
echo '<br>';


var_dump($objPelF);
echo '<br>';
var_dump($objPelT);
$objPel = json_decode($peliculas);
echo '<br>';
echo "Objeto estandar:";
echo '<br>';
echo $objPel->Año;
echo '<br>';
echo $objPel->Titulo;
echo '<br>';
$arrPel = json_decode($peliculas, true);
echo "Arreglo asociativo:";
echo '<br>';
echo $arrPel["Año"];
echo '<br>';
echo $arrPel["Titulo"];
echo '<br>';

