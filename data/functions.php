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

?>