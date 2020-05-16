<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto.php</title>
    
</head>
<body>
<div class="container">
<div class="row">
<div class="col-10 mx-auto text-justify">
<hr>
<h3 class="text-danger">Prueba</h3>
<h4 class="text-primary"> Elaborar un script  que calcular el área de un círculo. </h4>
<hr>
<h2 class="text-primary">Area de un círculo </h2>
<div class="mx-auto">
<form action="AreaCirculo.php" method="post">
<label for="radio">Ingrese el radio del circulo:</label>
<input class="form-control col-sm-8" type="text" name="radio" id="radio" required>

<input type="submit" value="Calcular" class="btn btn-success">
</form>
<hr>
</div>
<?php

if (isset($_POST["radio"])){

    if ($_POST["radio"] > 0 ) {

        $area = 0;
    

        $radio = $_POST["radio"];
      
       
        $area =  3.1416 * pow($radio,2) ;
      
        echo "El area de un circulo es: ".$area."<hr>" ;

       
    }
}


?>
</div>
</div>
</div>
</body>
</html>
