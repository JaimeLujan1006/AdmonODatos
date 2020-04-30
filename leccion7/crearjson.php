<?php
$array = array(
    "vuelo"=>array(
    array("id"=>"1","Origen"=>"New York","Destino"=>"London","Duración"=>"415"),
    array("id"=>"2","Origen"=>"Shangai","Destino"=>"Paris","Duración"=>"760"),
    array("id"=>"3","Origen"=>"Istambul","Destino"=>"Tokio","Duración"=>"700"),
    array("id"=>"4","Origen"=>"New York","Destino"=>"Paris","Duración"=>"435"),
    array("id"=>"5","Origen"=>"Moscow","Destino"=>"Paris","Duración"=>"245"),
    array("id"=>"6","Origen"=>"Lima","Destino"=>"New York","Duración"=>"455")
    ),
    "contactos"=>array(
    array("Nombre"=>"Lucia","Apellidos"=>"Lirios","Fecha de nacimiento"=>"06/01/78","Estado civi"=>"Casada","Origen"=>"Nepal"),
    array("Nombre "=>"Juan","Apellidos"=>"Palacios","Fecha de nacimiento"=>"21/08/93","Estado civi"=>"Soltero","Origen"=>"Francia"),
    array("Nombre "=>"Daniela","Apellidos"=>"Jaramillo","Fecha de nacimiento"=>"26/10/95","Estado civi"=>"Soltera","Origen"=>"Suiza"),
    array("Nombre "=>"Francisco","Apellidos"=>"Acosta","Fecha de nacimiento"=>"06/10/92","Estado civi"=>"Divorsiado","Origen"=>"Peru")
    ),
    "peliculas"=>array(
    array("Id"=>"5467","Titulo"=>"La campaña","Año"=>"2012","Genero"=>"Drama","Clasificacion"=>"B"),
    array("Id"=>"8563","Titulo"=>"El faro","Año"=>"2019","Genero"=>"Terror","Clasificacion"=>"R"),
    array("Id"=>"1286","Titulo"=>"Alfa","Año"=>"2018","Genero"=>"Drama","Clasificacion"=>"C")
    );
    echo json_encode($array);