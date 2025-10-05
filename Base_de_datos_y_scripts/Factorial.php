<?php
 $factorial = null;
function factorial($f){

 //return ($f <= 1) ? 1 : $f * factorial($f-1);tambien se puede realizar con un if ternario
    if($f <= 1){
      return 1;
    }else{
      return $f * factorial($f -1);
    } 
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if(is_numeric($_POST['factorial'])&& $_POST['factorial'] >= 0){
      $factorial = $_POST['factorial'];
      $resultado = factorial($factorial);  
    }else{
        $factorial = null;
    }
    
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de factorial</title>
</head>
<body>
    <h1>calculo de factoriales</h1>
      <form action="" method="post">
      <input type="text" placeholder="numero a calcular" name= "factorial" value=""> 
      <input type="submit" value="Enviar">
      </form>
      
       <?php if (isset($factorial) && $factorial !== null): ?>
        <p>El factorial de <?=$factorial?>! es: <?=$resultado ?></p>
    <?php elseif (($factorial == null)): ?>
        <p>Por favor, ingresa un entero positivo para calcular el factorial.</p>
    <?php endif; ?>

</body>
</html>