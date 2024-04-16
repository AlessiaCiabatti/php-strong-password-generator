<?php


include_once __DIR__ . '/partials/head.php';
include_once __DIR__ . '/data/functions.php';

$error_message = '';

if(isset($_POST['numero'])){
  if((!getPssw($numero_utente))){
    $error_message= 'Inserire un numero';
  }else{
    session_start();
    $_SESSION['new_password'] = getPssw($numero_utente);
    header('Location: ./user.php');
  }
};
 
?>




<body>
<div class="container my-5">

  <form action="index.php" method="post">
    <input type="text" name="numero"> 
    <button type="subtmit" class="btn btn-primary">Invia</button>
    <p class="text-danger"><?php echo $error_message ?></p>
  </form>

</div>

</body>

</html>