<?php
if ($_POST["iniciou"]!="S") {
    $sorteio=rand(1,100);
    $tentativa=0;
}
if ($_POST["enviado"]=="S") {
    $valor= $_POST["valor"];
    $sorteio=$_POST["sorteio"];
    $tentativa=$_POST["tentativa"];
    
    if ($valor<$sorteio){
        $res="O valor é maior que $valor";
        $tentativa++;
    }
    elseif($valor>$sorteio){
        $res="O valor é menor que $valor";
        $tentativa++;
    }
    else {
        $res="Parabéns você acertou em $tentativa tentativas";
    }
    $solucao="<p>$res</p>";
}
?>
<form name = "frm" method="post">
    <p>Digite no campo abaixo</p>
    Valor:<input type="text" name="valor">

    <input type="hidden" name="sorteio" value="<?php echo $sorteio;?>">
    <input type="hidden" name="tentativa" value="<?php echo $tentativa;?>">
    <input type="hidden" name="iniciou" value="S">
    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">
</form>
<?php
echo $solucao;
?>