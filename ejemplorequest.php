<?php

  $diametro = $_REQUEST['diam'];
  $altura = $_REQUEST['altu'];
  $radio = $diametro/2;
  $pi = 3.141593;
  $cuadrado = $radio*$radio;
  $volumen = $pi*$cuadrado*$altura;
  echo"<br/>&nbsp; EL Volumen del cilindro es: ".$volumen." metros cubicos";
?>
