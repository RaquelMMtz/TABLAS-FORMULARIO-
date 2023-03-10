<!DOCTYPE html>
<html>
    <head>
        <tittle> Procesando el formulario </tittle>
</head> 
<body>
        <form action = "calcula.php" method="get">
            <?php
            $numero=$_GET["numero"];
            echo ' <input type = "hidden" id= "numero" name="numero" value="'.$numero.'">';
            for ($i=1; $i <= 10; $i++) { 
               echo' <label for= "fname"> <br>ingrese el numero de la tabla de multiplicar:<br> '.$numero.' x '.$i.' </label><br>
               <input type="text" id="x"'.$i.'"
               name="x'.$i.'"
               value=""><br>';

            }
        ?><br><br> 
            
            
        
            <input type="submit" value="Generar"  style = "background-color: aqua;">

            
        </form>
</body>
</html>