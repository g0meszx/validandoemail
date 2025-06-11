<?php

$a = true;
$b = false;
$c = false;
$d = true;
$e = false;


if ( ($a || $b) && ($c && $d) ) {
    $x = true;
    $mensagem_x = "Verdadeiro";
    
} else {
    $x = false;
    $mensagem_x = "0 Falso";
    
}

echo $x." ".$mensagem_x;


echo "<br>";


if ( !$e && $c || $d ) {
    $y = true;
    $mensagem_y = "Verdadeiro";

} else {
    $y = false;
    $mensagem_y = "0 Falso";

}

echo $y." ".$mensagem_y;


echo "<br>";


if ( ($b || $c) && $a ) {
    $z = true;
    $mensagem_z = "Verdadeiro";

} else {
    $z = false;
    $mensagem_z = "0 Falso";
    
}

echo $z." ".$mensagem_z;


echo "<br>";
echo "<br>";


echo "O resultado consiste em: se a lógica do 'if' estiver correta, o 'else' será ignorado e a resposta será a condição proposta dentro do 'if', e vice-versa."



?>