<?php

$numero = readline("insira o numero para a tabuada");

for ($i=0; $i < 11; $i++) { 
    print_r($i . " + ". $numero . " = ". $i+$numero . "\n");
};