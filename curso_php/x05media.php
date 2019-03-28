<?php
if ($_POST ["enviado"]=="S") {
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota3"];

    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

    if ($media >= 7) {
        $res = "Aluno aprovado com nota $media";
    }
    else {  $res = "Aluno reprovado com nota $media";}
    
    $solucao = "<p>Português: $nota1 </p>
    <p>Matemática: $nota2 </p>
    <p>Biologia: $nota3 </p>
    <p>Física: $nota4 </p>
    <p>Resultado Final: $res </p>";
    
}
?>

<form name = "frm" method="post">
    Nome: <input type="text" name="nome" size="40">
    Português: <input type="text" name="nota1" size="2">
    Matemática: <input type="text" name="nota2" size="2">
    Biologia: <input type="text" name="nota3" size="2">
    Física: <input type="text" name="nota4" size="2">

    <input type="hidden" name="enviado" value="S">
    <input type="submit" value="calcular">





</form>

<?php
echo $solucao;
?>
