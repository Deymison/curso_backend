<?php
if ($_POST["enviado"]=="S") {

    $n100=0;
    $n50=0;
    $n20=0;
    $n10=0;
    $n5=0;
    $n2=0;
    $n1=0;

    $valor=$_POST["dado1"];
    $resto= $valor;
    if ($resto>=100) {
        $n100=(int)($resto/100);
        $resto= $resto % 100;
    }
    if ($resto>=50) {
        $n50=(int)($resto/50);
        $resto= $resto % 50;
    }
    if ($resto>=20) {
        $n20=(int)($resto/20);
        $resto= $resto % 20;
    }
    if ($resto>=10) {
        $n10=(int)($resto/10);
        $resto= $resto % 10;
    }
    if ($resto>=5) {
        $n5=(int)($resto/5);
        $resto= $resto % 5;
    }
    if ($resto>=2) {
        $n2=(int)($resto/2);
        $resto= $resto % 2;
    }
    if ($resto>=1) {
        $n1=(int)($resto/1);
        $resto= $resto % 1;
    }
    $solucao="<p>n100: $n100
    <p>n50: $n50
    <p>n20: $n20
    <p>n10: $n10
    <p>n5: $n5
    <p>n2: $n2
    <p>n1: $n1";
}
?>

<form name = "frm" method="post">
    <p>Digite no campo abaixo</p>
    Valor: <input type="text" name="dado1">
    
    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">
</form>
<?php
echo $solucao;
?>
