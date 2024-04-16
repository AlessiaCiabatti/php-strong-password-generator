<?php 

include_once __DIR__ . '/data/functions.php';
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--  -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
</head>


<body>
<div class="container my-5">

  <form action="index.php" method="post">
    <input type="text" name="numero"> 
    <button type="subtmit" class="btn btn-primary">Invia</button>
    <h3><?php echo getPssw($numero_utente) ?></h3>
  </form>

</div>

</body>

</html>