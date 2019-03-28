<?php
if ($_POST ["enviado"]=="S") {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $lado3 = $_POST["lado3"];

    if (($lado1<$lado2+$lado3) && ($lado2<$lado1+$lado3) && ($lado3<$lado1+$lado2)){
        $res = "É um triangulo";
        if (($lado1==$lado2) && ($lado2==$lado3)){
            $res = "Equilatero";
        }
    
        elseif (($lado1!=$lado2) && ($lado1!=$lado3) && ($lado2!=$lado3)) {
            $res = " Escaleno";
        }
    
        else {
            $res = " Isóceles";
        }
    }
    else {
        $res = "Não é um triangulo";
    }
    $solucao =  "<p>O triangulo é: $res </p>";
    
}
?>

<form name = "frm" method="post">
    <p>Digite no campo abaixo</p>
    Lado 1: <input type="text" name="lado1">
    Lado 2: <input type="text" name="lado2">
    Lado 3: <input type="text" name="lado3">
    
    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">
<?php
echo $solucao;
?>
