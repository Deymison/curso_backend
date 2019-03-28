<?php
$nome = $_POST["nome"];
$s_nome = $_POST["sobrenome"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$diaA = $_POST["dia_a"];
$mesA = $_POST["mes_a"];
$anoA = $_POST["ano_a"];
$prof = $_POST["profissao"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$idade = $anoA - $ano;
if ($mesA < $mes) {
	$idcorreta = $idade - 1;
}
if ($mes == $mesA && $diaA < $dia) {
	$idcorreta = $idade - 1;
}
if ($diaA > $dia || $dia == $diaA){
	$idcorreta = $idade;
}
if ($email == "deymison@marvel.com" && $senha == "dey12345") {
	echo "<h1> Ola $nome </h1>";
	echo "<h2>NOME: $nome $s_nome</h2>";
	echo "<h2>DATANASC: $dia/$mes/$ano</h2>";
	echo "<h2>PROFISSÃO: $prof </h2>";
if (isset($idcorreta)) {
	echo "<h2>IDADE: $idcorreta </h2>";
}
else {
	echo "<h2>IDADE: $idade </h2>";
}

}
else {
	echo "Dados Incorretos";
}


