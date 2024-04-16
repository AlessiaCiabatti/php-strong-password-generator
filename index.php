<?php 
// verifico se esiste
// il numero che il cliente inserisce
$numero_utente = $_POST['numero'] ?? '';

// funzione per generare password random
function getPssw($numero_utente) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
    $random_password = '';
 
    for ($i = 0; $i < $numero_utente; $i++) {
        $numero_random = rand(0, strlen($caratteri) - 1);
        // $caratteri[$numero_random]; se numero ramndom è uguale a 5, concateno aa random password il quinto carattere della stringa caratteri in questo caso 4
        $random_password .= $caratteri[$numero_random];
    }
 
    return $random_password;

};
 
echo getPssw($numero_utente);
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
  </form>

</div>

</body>

</html>