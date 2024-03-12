<?php
$numero1 = readline("Digite um numero: ");
$numero2 = readline("Digite outro numero: ");

if ($numero1>$numero2){
    print_r('O numero maior eh ' . $numero1);
} else if($numero1<$numero2){
    print_r('o numero maior eh ' . $numero2);
}else {
    print_r('Eles sao iguais');
}