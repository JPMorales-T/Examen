
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>calculo de interes</h1>
     <p>Ingresa los siguentes datos:</p>
     <form action="" method="post">
      <input type="text" placeholder="monto" name= "monto" value=""> 
      <input type="text" placeholder="plazo en meses" name= "plazo" value=""> 
      <input type="text" placeholder="taza de interés mensual % " name= "interes" value=""> 
      <input type="submit" value="Enviar">
      </form>


</body>
</body>
</html>

<?php
function tablaIntereses($saldo, $interes, $periodo){
    $interes /= 100;
    $abono = ($saldo/$periodo);  
    echo "<table border='1'>";
    echo "<tr><th>Periodo</th><th>Saldo</th><th>Interés</th><th>Abono</th><th>Pago</th></tr>";
    for($i=1; $i <= $periodo ; $i++){
     $intereses = ($saldo * $interes);
     $pago = ($abono+$intereses);
     
     echo "<tr>
     <th>$i</th>
     <th>Q".number_format($saldo,2,'.',',')."</th>
     <th>".number_format($intereses,2,'.',',')."</th>
     <th>".number_format($abono,2,'.',',')."</th>
     <th>".number_format($pago,2,'.',',')."</th>
     </tr>";

     $saldo -= $abono;

    }
 echo " </table>";

}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if($_POST['monto']> 0 && $_POST['interes']> 0 && $_POST['plazo'] > 0){
    $monto = $_POST['monto'];
    $inte = $_POST['interes'];
    $plazo = $_POST['plazo'];
     
    echo "<h2>Resultados del Cálculo:</h2>";
    tablaIntereses($monto,$inte,$plazo);   
    }else{
        echo "<p> ingresar numeros positivos mayores a o</p>";
    }
    
}



?>