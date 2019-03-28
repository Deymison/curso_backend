<?php
if ($_POST ["enviado"]=="S") {
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    if ($valor1 > $valor2) {
        $valorVer = "Primeiro valor";
    }
    else {  $valorVer = "Segundo valor";}
    
    $solucao = "<p>Valor verdadeiro : $valorVer </p>";
    
    
}
?>

<form name = "frm" method="post">
    Insira o primeiro valor: <input type="text" name="valor1">
    Insira o segundo valor: <input type="text" name="valor2">
    
    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">





</form>

<?php
echo $solucao;
?>
