<hgroup class="title">
  <h2>
    <?php
      if (strpos($url,'consulta_operaciones') !== false) {
        echo 'CONSULTA DE OPERACIONES';
      } elseif (strpos($url,'consulta_renovacion') !== false) {
        echo 'CONSULTA DE RENOVACIÓN';
      } elseif (strpos($url,'cotizar_seguro_nuevo') !== false) {
        echo 'COTIZAR SEGURO NUEVO';
      } elseif (strpos($url,'index') !== false) {
        echo 'CONSULTA DE CARTERA';
      } else {
        echo 'CONSULTA DE CARTERA';
      }
    ?>
  </h2>

  <ul class="bread">
    <li>
      <a href="index.php">Home</a> <span>></span>
    </li>

    <li>
      <?php
        if (strpos($url,'consulta_operaciones') !== false) {
          echo '<a href="consulta_operaciones.php">Consulta de operaciones</a>';
        } elseif (strpos($url,'consulta_renovacion') !== false) {
          echo '<a href="consulta_renovacion.php">Consulta de renovación</a>';
        } elseif (strpos($url,'cotizar_seguro_nuevo') !== false) {
          echo '<a href="cotizar_seguro_nuevo.php">Cotizar seguro nuevo</a>';
        } elseif (strpos($url,'index') !== false) {
          echo '<a href="index.php">Consulta de cartera</a>';
        } else {
          echo '<a href="index.php">Consulta de cartera</a>';
        }
      ?>
    </li>
  </ul>
</hgroup>