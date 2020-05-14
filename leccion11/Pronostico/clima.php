<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./bootstrap.min.css" />
    <link rel="stylesheet" href="./estilos.css" />
    <title>Tabla Pronostico</title>
</head>

<body>
    <div class="container">
        <h1 class="titulo">Pronostico del Tiempo </h1>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Dia</th>
                        <th>Hoy</th>
                        <th>Mañana</th>
                        <th>Miercoles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $lista = array(
                        array("Condicion", "Soleado ", "Mayormente soleado", "Parcialmente nublado"),
                        array("Temperatura", "19° C ", "17° C", "12° C "),
                        array("Vientos", "E 13km/ ", "E 11km/h", "S 16km/h")
                    );
                    $tam = count($lista);
                    for ($r = 0; $r < $tam; $r++) {
                        echo "<tr>";
                        echo "<td>" . $lista[$r][0] . "</td>";
                        echo "<td>" . $lista[$r][1] . "</td>";
                        echo "<td>" . $lista[$r][2] . "</td>";
                        echo "<td>" . $lista[$r][3] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tfoot>
                    <caption>Proximos tres dias</caption>
            </table>
        </div>
    </div>
</body>

</html>