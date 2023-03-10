<!DOCTYPE html>
<html>
    <head>
        <tittle> Calculando el formulario </tittle>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head> 
<body>

<?php 

          $tabla=$_GET["numero"];
           $puntos=0;
           for ($i=1; $i <= 10; $i++) { 
            $resultados=$_GET["x".$i];
            $multiplicacion= ($tabla*$i);
            echo' <br><h2 style = "color: purple"> El resultado de '.$tabla. 'x' .$i. 'es:'.$resultados. '</h2> <h2> El resultado correcto es: '.$multiplicacion. '</h2>';
       
       if ($resultados==$multiplicacion) {
        $puntos++;
       }
       else{
        echo '<br> <img src=" https://www.bing.com/ck/a?!&&p=a277227f394c89feJmltdHM9MTY3Njg1MTIwMCZpZ3VpZD0xZWY2MzkwYi02Y2ZiLTZkMzctMjYyZC0yYjM1NmRkYTZjZGUmaW5zaWQ9NTUwMQ&ptn=3&hsh=3&fclid=1ef6390b-6cfb-6d37-262d-2b356dda6cde&u=a1L2ltYWdlcy9zZWFyY2g_cT1JbWFnZW4lMjBkZSUyMFBhbG9taXRhJTIwVmVyZGUmRk9STT1JUUZSQkEmaWQ9NjU1MTlCREE1MzE5NTNBRTdFMkYwREFDQTIzNzkzQUEwMTk3QUVEQg&ntb=1.jpg"'
      ; }
       
        }
        echo '<br> <h2> El numero de aciertos es: '.$puntos.' de 10</h2>';
        ?><br><br> 

</body>
    </html>