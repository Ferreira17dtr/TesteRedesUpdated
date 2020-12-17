
<?php

//criar array;
$numero = array();
for ($i=0; $i < 15; $i++) {
	$numero[$i]=rand(1,1000);
}

foreach ($numero as $chave => $num) {
	if ($num % 2 == 0) {
		echo "A posição é: " .$chave. "numero: " .$num. " par ";
		echo "<br>";
	}
	else {
		echo "A posição é: " .$chave. "numero: " .$num. " impar ";
		echo "<br>";
	}
}

?>
