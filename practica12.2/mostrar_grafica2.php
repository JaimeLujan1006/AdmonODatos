<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Gráfica de temperatura durante 15 hrs</title> 
    <link rel="stylesheet" href="chartist.min.css"> 
    <link rel="stylesheet" href="bootstrap.min.css"> 
    <link rel="stylesheet" href="estilos.css"> 
    <script src="chartist.min.js"></script> 
</head> 
<body> 
    <div clas="container"> 
        <div class="centro"> 
            <h1>Temperaturas tomadas durante 15 horas </h1> 
            <span class="subt">Horario de: 06:00 hasta las 21:00 del 23 mayo de 2019</span> 
        </div> 
        <div class="ct-chart ct-octave"></div>

<?php 
        //sabemos que el archivo con los datos es agenda.json 
        $archivo = 'tempMyMByHour-14hrs.json'; 
        //abrimos el archivo 
        $handle = fopen($archivo, 'r') 
            or die("Error: No se puede abrir el archivo json"); 
        //recuerda que necesitamos el tamano del archivo 
        $size = filesize($archivo); 
        //leemos el archivo como cualquier archivo de texto 
        //recuperamos todo el contenido 
        $contenido = fread($handle, $size); 
        //cerramos el archivo 
        fclose($handle); 
        //AQUÍ RECONOCEMOS LOS DATOS JSON Y LOS CONVERTIMOS 
        // LOS PASAMOS A UN ARREGLO Y OBTENDREMOS UNA LISTA DE DATOS 
        $listaTemper = json_decode($contenido, true); 
        //preparamos dos arreglos para separar las etiquetas de los valores 
        // en dos listas diferentes 
        $lista_labels = array(); 
        $lista_valores = array(); 
        //recorremos para sacar los datos por separado(por conveniencia) 
        // tambien ya sabemos que son solo 6 datos 
        foreach ($listaTemper as $horas => $temp) { 
            $lista_labels[] = $horas; 
            $lista_valores[] = $temp; 
        } 
        ?> 
        <script> 
            // Configuracion de datos 
            var datos = { 
                labels: [ 
                    '<?php echo $lista_labels[0]; ?>', 
                    '<?php echo $lista_labels[1]; ?>', 
                    '<?php echo $lista_labels[2]; ?>', 
                    '<?php echo $lista_labels[3]; ?>', 
                    '<?php echo $lista_labels[4]; ?>', 
                    '<?php echo $lista_labels[5]; ?>',
                    '<?php echo $lista_labels[6]; ?>',
                    '<?php echo $lista_labels[7]; ?>',
                    '<?php echo $lista_labels[8]; ?>'
                ], 
                
                series: [{ 
                    name: 'serie-1', 
                    data: [ 
                        <?php echo $lista_valores[0]; ?>, 
                        <?php echo $lista_valores[1]; ?>, 
                        <?php echo $lista_valores[2]; ?>, 
                        <?php echo $lista_valores[3]; ?>, 
                        <?php echo $lista_valores[4]; ?>, 
                        <?php echo $lista_valores[5]; ?>,
                        <?php echo $lista_valores[6]; ?>,
                        <?php echo $lista_valores[7]; ?>,
                        <?php echo $lista_valores[8]; ?> 
                    ] 
                }] 
            }; 
            // Configuracion de opciones 
            var opciones = { 
                fullWidth: true, 
                showArea: true, 
                showLine:false, 
                showPoint:true, 
                chartPadding: { 
                    bottom: 100, 
                    right:35, 
                    left:10 
                }, 
                axisX: { 
                    // En el eje x, 'start' significa arriba 
                    // y 'end' significa abajo 
                    position: 'start', 
                }, 
                axisY: { 
                    type: Chartist.FixedScaleAxis, 
                    ticks: [5, 10, 15, 20, 25, 30,35], 
                    low: 5, 
                    high: 35 
                }, 
                series: { 
                    'serie-1': { 
                        lineSmooth: Chartist.Interpolation.cardinal() 
                    } 
                } 
            }; 
            //opciones responsivas
            var opcionesResponsive = [['screen and (max-width: 640px)', 
                    { 
                        series: { 
                            'serie-1': { 
                                lineSmooth: Chartist.Interpolation.none() 
                            } 
                        } 
                    } 
                ] 
            ]; new Chartist.Line('.ct-chart', datos, opciones, opcionesResponsive); 
        </script> 
    </div> 
</body> 
</html>