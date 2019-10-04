<!DOCTYPE html>
<head>
  <?php include("includes/head.inc.html"); ?>
</head>

<body>
  <div class="cFull">
    <!-- header -->
    <?php include("includes/header.inc.html"); ?>
    <div class="content">
      <?php include("includes/menu.inc.html"); ?>
      <section class="rSide">
        <?php
          $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
          include("includes/rightContent.inc.php"); ?>
      </section>
    </div>
  </div>
  <!-- footer -->
  <?php include("includes/modals.inc.php"); ?>
  <?php include("includes/scripts.inc.html"); ?>
</body>

</html>