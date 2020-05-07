<?php
require_once('./ClassPelicula.php');

$archivo_json = "pelicula.json";

$pelicula1 = new Pelicula(
    "Alpha",
    "Drama",
    "120 min",
    "B",
    "Kodi Smit-McPhee"
);

$pelicula2 = new Pelicula(
    "The Mule",
    "Crimen",
    "116 min",
    "B",
    "Clint Eastwood"
);

$peliculas = array();

$peliculas[] = $pelicula1;
$peliculas[] = $pelicula2;

$json_string = json_encode($peliculas);

$arch = fopen($archivo_json,'w');
if( $arch == false ) {
    echo ( "Error al abrir el archivo" );
    exit();
}

fwrite($arch,$json_string);

fclose($arch);

echo '<h3>Peliculas regristradas en cartelera... </h3>';

header("refresh:2;url=mostrar_json.php");
