<?php
if ($_POST["enviado"]=="S") {
    $nome=$_POST["dado1"];
    $dependentes=$_POST["dado2"];
    $salarioB=$_POST["dado3"];

    $salarioL=$salarioB-600*$dependentes;

    $numDepend=$dependentes*600;
    if($salarioL<=10000){
        $ir=0;
    }
    elseif(($salarioL>10000)&&($salarioL<30000)){
        $ir=0.5*$salarioL;
    }
    elseif(($salarioL>=30000)&&($salarioL<=60000)){
        $ir=0.1*$salarioL;
    }
    else{
        $ir=0.15*$salarioL;
    }
    $salario=$salarioL-$ir;
    $solucao="<p>Nome: $nome </p>
    <p>Salario Liquido: $salario </p>
    <p>IR: $ir </p>
    <p>Dependentes: $numDepend</p>";
}
?>

<form name = "frm" method="post">
    <p>Digite no campo abaixo</p>
    Nome: <input type="text" name="dado1">
    Dependentes: <input type="text" name="dado2">
    Salario: <input type="text" name="dado3">
    
    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">

</form>
<?php
echo $solucao;
?>
