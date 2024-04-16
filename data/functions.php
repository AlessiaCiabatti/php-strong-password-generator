<?php 

// se vengo chiamato in GET con il parametro numero = 10 la varibile $numero_utente è uguale a 10 altrimenti è vuota
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