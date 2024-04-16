
<?php 

session_start();

include_once __DIR__ . '/partials/head.php';
//include_once __DIR__ . '/data/functions.php';
?>

<body>
  <div class="container my-5">
    <h3>
    La tua password è: <?php echo $_SESSION['new_password'] ?>
    </h3>
  </div>

</body>