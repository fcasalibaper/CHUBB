<?php
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  include("title.inc.php");
  if (strpos($url,'consulta_operaciones') !== false) {
    include("consulta_operaciones.inc.php");
    include("consulta_operaciones_detalle.inc.php");
  } elseif (strpos($url,'consulta_renovacion') !== false) {
    include("consulta_renovacion.inc.php");
  } elseif (strpos($url,'cotizar_seguro_nuevo') !== false) {
    include("cotizar_seguro_nuevo.inc.php");
  } elseif (strpos($url,'index') !== false) {
    include("consulta_cartera.inc.php");
  } else {
    include("consulta_cartera.inc.php");
  }
?>

