<!DOCTYPE html>
<html>
<head>
	<style>
		#bloque{
			
		}
	</style>
	<title>Grafica de televisores por vivienda</title>
	<script type="text/javascript" src="jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="Chart.bundle.min.js"></script>
	<link rel="stylesheet" href="estilos2.css">
	<script id="bloque" type="text/javascript">
	<?php //ubicamos el archivo para manejarlo en una variable 
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
    ?> 
	$(document).ready(function(){
		var datos = {
			type: "pie",
			data : {
				datasets :[{
					data : [
						<?php echo $cero;?>,
						<?php echo $uno;?>,
						<?php echo $dos;?>,
						<?php echo $tres;?>,
						<?php echo $cuatro;?>,
						<?php echo $cinco;?>,
					],
					backgroundColor: [
						"#F7464A",
						"#46BFBD",
						"#fdb100",
						"#fa02d9",
						"#4D5360",
						"#00FB22"
					],
				}],
				labels : [
					"0 pantallas",
					"1 pantalla",
					"2 pantallas",
					"3 pantallas",
					"4 pantallas",
					"5 pantallas",
				]
			},
			options : {
				responsive : true,
				center: true,
			}
		};

		var canvas = document.getElementById('chart').getContext('2d');
		window.pie = new Chart(canvas, datos);
	});
	</script></div>
</head>
<body>
<div class="centro"> 
             <h1>25000 encuestas en Gomez Palacio </h1> 
             <span class="subt">Se mostrara la cantidad de viviendas con determinada cantidad de pantallas</span> 
         </div> 
	<div id="canvas-container" style="width:100%;">
		<canvas id="chart" width="500" height="350"></canvas>
	</div>
</body>
</html>