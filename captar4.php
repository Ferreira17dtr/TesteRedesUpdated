<?php

$maior= -99999;
$menor= 99999;
$soma= 0;
$produto= 1;

$numero = array();
for ($i=0; $i < 15; $i++) {
	$numero[]=rand(1,10000);
}

foreach ($numero as $chave => $num) {
	if ($num>$maior) {
		$maior=$num;
	}
	if ($num<$menor) {
		$menor=$num;
	}

	$soma = $soma + $num;
	$produto = $produto * $soma;
}

$media = $soma / 15;


echo "O maior numero é " .$maior;
echo "<br>";
echo "<br>";
echo "O menor numero é " .$menor;
echo "<br>";
echo "<br>";
echo "A media é " .$media;
echo "<br>";
echo "<br>";
echo "O produto é " .$produto;
echo "<br>";
echo "<br>";
?>