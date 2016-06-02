<html>
<head>
    <title> Banco de Dados </title>
    <meta charset="utf-8">
</head>
<body>
<?php
$jason_str = file_get_contents("lista.txt");
$partes = preg_split("/;/", $jason_str);
//$array = json_decode($jason_arry);

print_r ($partes);

var_dump($_GET);


/*$array = [
    0 => ['id' => 1, 'nome' => 'teste', 'email' => 'email'],
    1 => ['id' => 2, 'nome' => 'teste2', 'email' => 'email2'],
    2 => ['id' => 3, 'nome' => 'teste3', 'email' => 'email3']
];
var_dump($array); //teste

//Percorre todo o array, passando ele mesmo por referência para a função e removendo seu índice 'id'. 
//Assim permanecendo somente o que você precisa;
array_filter($array, function(&$array) {
    unset($array['id']);
});
var_dump($array); //teste

echo json_encode($array); */

?>


</body>

</html>