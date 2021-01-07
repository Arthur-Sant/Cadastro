<?php
header("Content-type:text/html; charset:utf8");

session_start();

if($_SESSION["usuario"] == 1){

}else{
    header("location: index.html");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro_produto</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/animation.css">
    <link rel="icon" href="../hexagon.svg">
</head>
<body>

<div class="form">
    <h1 class="animation-tudo h1"><ins>Cadastro de Produto</ins></h1>

    <form action="produto.php" method="post">
        <div class="caixas">
            <input class="animation-tudo linha1" type="text" name="nome" placeholder="Nome" autocomplete="on" autofocus required>
            <input class="animation-tudo linha2" type="number" name="preco" placeholder="Preço" autocomplete="on" step="any" autofocus required>
            <input class="animation-tudo linha3" type="number" name="quantidade" placeholder="Quantidade" autocomplete="on" minlength="1" autofocus required>
        </div>
        <div class="button animation-tudo linha5">
            <button name="cadastrar">Cadastrar produto</button>
        </div>
    </form>
    <br>
    <h3 class="animation-tudo linha6"><a href="../index.html">Já cadastrei o produto</a></h3>

</body>
</html>