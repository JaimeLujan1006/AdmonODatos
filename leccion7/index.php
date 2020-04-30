<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
         <title>Lector Json</title>
         <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
         <script>
         $.getJSON("crearjson.php".function(array){
            $("#res").text(json.contactos[1].nombre);
         });
         </script>
    </head>
    <body>
        <span id="res">NADA</span>
    </body>
</html>