<?php
if ($_POST ["enviado"]=="S") {
    $ano = $_POST["ano"];
    $mes = $_POST["mes"];
    $dia = $_POST["dia"];

    $idade_dias = $ano * 365 + $mes * 30 + $dia;

    $solucao = "<p> Ano: $ano </p>
    <p> Mês: $mes </p>
    <p> Dia: $dia </p>
    <p> Idade em dias: $idade_dias </p>
    <p>Salário Líquido: $salarioLiquido </p>";
    
}
?>

<form name = "frm" method="post">
    Ano: <input type="text" name="ano">
    Mês: <input type="text" name="mes">
    Dia:<input type="text" name="dia">

    
    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">





</form>

<?php
echo $solucao;
?>
