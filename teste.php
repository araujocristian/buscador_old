<?php
//string json (array contendo 3 elementos)
$json_str = array(
    "cor" => "vermelha",
    "sabor" => "doce",
    "formato" => "redonda",
    "nome" => "maçã"
);

//faz o parsing da string, criando o array "empregados"
$jsonObj = json_encode($json_str);

print_r ($jsonObj);
?>