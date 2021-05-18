<?php

function problemaJosephus($nPessoas, $posInicio) {
	$arr = array();
	for($i = 0; $i < $nPessoas; $i++) {
		array_push($arr, ($i+1));
	}

	$calculoRemocaoPosicao = $posInicio - 1;
	$iteracoes = $nPessoas - 1;
	while($iteracoes > 0) {
		unset($arr[$calculoRemocaoPosicao]);

		$arr = array_values($arr);

		$calculoRemocaoPosicao += $posInicio - 1;
		if ($calculoRemocaoPosicao > (count($arr) - 1)) {
			$calculoRemocaoPosicao = $calculoRemocaoPosicao % count($arr);
		}
		$iteracoes--;
	}
	return current($arr);
}

//testes representando outros cenários
$vivo = problemaJosephus(10, 3);
echo ('A posição é ' . $vivo);
echo "\n";
$vivo = problemaJosephus(100, 9);
echo ('A posição é ' . $vivo);
echo "\n";
$vivo = problemaJosephus(49, 5);
echo ('A posição é ' . $vivo);
echo "\n";

//teste representando o cenário da ilustração do desafio
$vivo = problemaJosephus(13, 2);
echo ('A posição é ' . $vivo);
echo "\n";

?>