<!DOCTYPE html>
<html>
<head>
	<style>
		h1{
			background-color: yellow;
		}
	</style>
	<title>PADRÃO DE PROJETO STRATEGY</title>
</head>
    <h1>PADRÃO DE PROJETO STRATEGY</h1>
<body>

</body>
</html>

<?php

interface Veiculo {

	public function aumentarVelocidade($velocidade);
	public function reduzirVelocidade($velocidade);
	public function trocarMarcha($velocidade);
	public function estacionarVeiculo($velocidade);
}

abstract class Automovel implements Veiculo {

	public function aumentarVelocidade($velocidade) {

		echo "Aumentando a velocidade em: ".$velocidade. "Km/h";
	}

	public function reduzirVelocidade($velocidade) {

		echo "Reduzindo a velocidade em: ".$velocidade. "Km/h";
	}

	public function trocarMarcha($velocidade) {

		echo "Trocando a marcha de numero: ".$velocidade;
	}

	public function estacionarVeiculo($velocidade) {

		echo "Estacionando veiculo no: ".$velocidade;
	}

}

class Carro extends Automovel {

public function frear() {


}

}

$Fiat = new Carro();

echo "<br>==========================/Primeiro Exemplo/==========================<br>";
$Fiat->aumentarVelocidade(50);
echo "<br>=====================//========================<br>";
$Fiat->reduzirVelocidade(50);
echo "<br>======================//======================<br>";
$Fiat->trocarMarcha(5);
echo "<br>=====================//========================<br>";
$Fiat->estacionarVeiculo("Centro");

$Delrey = new Carro();

echo "<br>==========================/Segundo Exemplo/==========================<br>";
$Delrey->aumentarVelocidade(100);
echo "<br>=====================//========================<br>";
$Delrey->reduzirVelocidade(100);
echo "<br>=====================//========================<br>";
$Delrey->trocarMarcha(4);
echo "<br>=====================//========================<br>";
$Delrey->estacionarVeiculo("Bairro Nova Parnaiba");

?>