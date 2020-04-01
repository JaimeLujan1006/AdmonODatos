<?php
$nombreArchivo = "biblioteca.xml";

if (file_exists($nombreArchivo)){
    $miXML = simplexml_load_file($nombreArchivo)
        or die("Error: No se puede crear el objeto SimpleXMLElement");

    var_dump($miXML);

    var_dump($miXML->libro[0]);

    var_dump($miXML->libro[0]->attributes());

    echo ($miXML->libro[0]->attributes()->isbn);
    echo('<br>');
    echo ($miXML->libro[0]->attributes()[0]);
    echo('<br>');
    echo ($miXML->libro[0]->attributes()['isbn']);
    echo('<br>');

    echo ($miXML->libro[2]->autor);

    $nombreLibro3 = $miXML->libro[2]->titulo;
    $precioLibro3 = $miXML->libro[2]->precio;
    $monedaLibro3 = $miXML->libro[2]->precio->attributes()['moneda'];
    $anioLibro3 = $miXML->libro[2]->anio;
    $editorialLibro3 = $miXML->libro[2]->editorial;
    $clasificacionLibro3 = $miXML->libro[2]->clasificacion;
    $idiomaLibro3 = $miXML->libro[2]->idioma;
    echo (" El tercer Libro \"" . $nombreLibro3 . "\", Cuesta: " . $precioLibro3 . " en " . $monedaLibro3 . "\", Año: " . $anioLibro3 . "\", Editorial: " . $editorialLibro3 . "\", Clasificacion: " . $clasificacionLibro3 . "\", Idioma: " . $idiomaLibro3);
    echo('<br>');
    echo('<br>');

    echo ($miXML->libro[0]->autor);

    $nombreLibro1 = $miXML->libro[0]->titulo;
    $precioLibro1 = $miXML->libro[0]->precio;
    $monedaLibro1 = $miXML->libro[0]->precio->attributes()['moneda'];
    $anioLibro1 = $miXML->libro[2]->anio;
    $editorialLibro1 = $miXML->libro[2]->editorial;
    $clasificacionLibro1 = $miXML->libro[2]->clasificacion;
    $idiomaLibro1 = $miXML->libro[2]->idioma;
    echo (" El primer Libro \"" . $nombreLibro1 . "\", Cuesta " . $precioLibro1 . " en " . $monedaLibro1 . "\", Año: " . $anioLibro1 . "\", Editorial: " . $editorialLibro1 . "\", Clasificacion: " . $clasificacionLibro1 . "\", Idioma: " . $idiomaLibro1);
    echo('<br>');
    echo('<br>');

    echo ($miXML->libro[1]->autor);

    $nombreLibro2 = $miXML->libro[1]->titulo;
    $precioLibro2 = $miXML->libro[1]->precio;
    $monedaLibro2 = $miXML->libro[1]->precio->attributes()['moneda'];
    $anioLibro2 = $miXML->libro[2]->anio;
    $editorialLibro2 = $miXML->libro[2]->editorial;
    $clasificacionLibro2 = $miXML->libro[2]->clasificacion;
    $idiomaLibro2 = $miXML->libro[2]->idioma;
    echo (" El segundo Libro \"" . $nombreLibro2 . "\", Cuesta " . $precioLibro2 . " en " . $monedaLibro2 . "\", Año: " . $anioLibro2 . "\", Editorial: " . $editorialLibro2 . "\", Clasificacion: " . $clasificacionLibro2 . "\", Idioma: " . $idiomaLibro2);


}