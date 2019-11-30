<?php

/*
 Variáveis Globais
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

$x=15;
$y=10;
/*
function soma() {
    echo $x + $y;
}

ASSIM NÃO FUNCIONA
*/

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y']."<br>";
}
soma(); 

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
print_r ($_SERVER);

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "<br><h1>"."seu nome é $nome e seu email é $email";
?>
