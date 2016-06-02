<html>
<head>
    <title> Banco de Dados </title>
    <meta charset="utf-8">
</head>
<body>
<?php
$arquivo = 'lista.txt';
 
if (file_exists($arquivo)) { //verificar se o aquivo existe
		
		/*$arry = file_get_contents("lista.txt");
		$arry1 = json_decode($arry);
		$arry2 = array($_POST['nome'],$_POST['tipo']);
		$eq = array_merge($arry1,$arry2);
		print_r ($total); */
	$json_arry = json_encode($_POST); //transforma os dados de entrada em JSON
	file_put_contents("lista.txt",";",FILE_APPEND);
	file_put_contents("lista.txt",$json_arry,FILE_APPEND); //Criando NOVA LINHA no aquivo .txt
} else {
    $json_arry = json_encode($_POST); //transforma os dados de entrada em JSON
	file_put_contents("lista.txt",$json_arry); //Criando aquivo .txt 
}

echo file_get_contents("lista.txt");



?>


</body>

</html>