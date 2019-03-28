<?php
if ($_POST ["enviado"]=="S") {
    $nome = $_POST["nome"];
    $horas = $_POST["idade"];
    $dependentes = $_POST["cargo"];

   
    $salarioBruto = $horas * 12 + $dependentes * 40;
    $inss = 0.085 * $salarioBruto;
    $ir = 0.05 * $salarioBruto;
    $salarioLiquido = $salarioBruto - $inss - $ir;

    $solucao = "<p> Nome: $nome </p>
    <p>Salario Bruto: $salarioBruto </p>
    <p>INSS: $inss </p>
    <p>Imposto de remda: $ir </p>
    <p>Horas Trabalhadas : $horas </p>
    <p>Dependentes: $dependentes </p>
    <p>Salário Líquido: $salarioLiquido </p>";
    
}
?>

<form name = "frm" method="post">
    Nome: <input type="text" name="nome">
    Horas: <input type="text" name="idade">
    Dependentes:<input type="text" name="cargo">
    
    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">





</form>

<?php
echo $solucao;
?>
