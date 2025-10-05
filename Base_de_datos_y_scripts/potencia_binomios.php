<?php 
//C(n,k)=C(n−1,k−1)+C(n−1,k)  
$polinomio = Null;
function coeficiente($n, $k){
if ($k == 0 || $k == $n) {
    return 1;
}else{
    return coeficiente($n-1, $k-1)+coeficiente($n-1, $k);
}

}
function agrupar($n){
    $res = "(a+b)^$n = "; //resultado, variable donde agrupare el resultado

    for ($k=0; $k <= $n ; $k++) { 
      $coefi = coeficiente($n, $k);
      $exponenteA = $n - $k ;
      $exponenteB = $k;

     $termino = "";
      if($coefi != 1){
         $termino .= $coefi; 
      }

      if($exponenteA > 0){
        $termino .= "a";
        if($exponenteA > 1){
            $termino .= "^($exponenteA)";
        }

      }

      if($exponenteB > 0){
        $termino .= "b";
        if($exponenteB > 1){
            $termino .= "^($exponenteB)";
        }
      }

      $res .= $termino;

      if($k < $n){
       $res .= "+"; 
      }
    }

    return $res;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_POST['potencia'] >= 0){
      $n = $_POST['potencia'];

      $polinomio = agrupar($n);
    }else{
        $polinomio = null;
    }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencia de binomios</title>
</head>
<body>
<h2>Calculo de potencia del binomio (a+b) </h2>
<p>ingresar el exponente:</p>
<form action="" method="post">
 <input type="text" placeholder="exponente" name="potencia" value="">
 <input type="submit" value="enviar">

</form>
 <?php if (isset($polinomio) && $polinomio !== null): ?>
        <p> <?=$polinomio?></p>
    <?php elseif (($polinomio == null)): ?>
        <p>Por favor, ingresa un exponente entero positivo.</p>
    <?php endif; ?>

    
</body>
</html>