<?php

//IF e While
$x=7;
while ($x>1) {
    echo $x;
    $x--;
}
if ($x=1){
    echo "<br><br>"."A variável X tem valor $x";
}
for ($x=1;$x<7;$x++){
    echo "<br>"."Esse é o for, o valor de X é: $x ";
}
switch ($x) { 
    case '7': //Só vai executar essa linha de código caso o $X seja 7, caso o contrário, o bloco default é executado.
        echo "<br><br><br>"."Esse é o switch case: o valor de X é $x";
        break;
    
    default:
        echo "Padrão";
        break;
}

?>