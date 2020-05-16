<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<form action="" method="post">
<label for="txtCH">Digite la cantidad de hombres</label>
<input type="text" name="txtCH" id="txtCH" require>



<hr>
<input type="submit" value="Calcular">


</form>

<?php
 if (isset($_POST["txtCH"])) {

    $xd= ($_POST["txtCH"]);


 

  $xm= round((857263-$xd)*100 / 857263);
 $xd= round (($_POST["txtCH"] *100)/857263);


  echo " El porcentaje de hombres es: $xd ";
  echo " El porcentaje de mujeres es: $xm ";
}
?>
    
</body>
</html>