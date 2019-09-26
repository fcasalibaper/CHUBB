<?php
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  include("title.inc.php");
  if (strpos($url,'consulta_operaciones') !== false) {
    echo 'consulta_operaciones';
  } elseif (strpos($url,'consulta_renovacion') !== false) {
    echo 'consulta_renovacion';
  } elseif (strpos($url,'cotizar_seguro_nuevo') !== false) {
    echo 'cotizar_seguro_nuevo';
  } elseif (strpos($url,'index') !== false) {
    include("consulta_cartera.inc.php");
  } else {
    include("consulta_cartera.inc.php");
  }
?>

