<?php
header("Content-type:text/html; charset:utf8");

session_start();

if(isset($_POST["nome"]) && !empty($_POST["nome"]) &&
   isset($_POST["nome"]) && !empty($_POST["nome"]) &&
   isset($_POST["nome"]) && !empty($_POST["nome"])) {

    $_SESSION["nome"] =  $_POST["nome"];
    $_SESSION["preco"] = $_POST["preco"];
    $_SESSION["quantidade"] = $_POST["quantidade"];

}else if(isset( $_SESSION["nome"]) &&
    isset($_SESSION["preco"]) &&
    isset($_SESSION["quantidade"])){

}
else{
    header("location: index.html");
}

$_SESSION["total"] = $_SESSION["preco"] *  $_SESSION["quantidade"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produto</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <style>
        body{
            padding: 0;
            margin: 0;
            width: 100vw;
            height: 100vh;
            background-color: #00004d;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        table{
            background-color: white;
            font-size: 30px;
            box-shadow: 5px 5px 5px 5px black;
            margin-bottom: 25px;
        }
        th{
            padding: 10px;
        }
        td{
            padding: 10px;
        }
        a{
            text-decoration: none;
            color: orangered;
            line-height: 3;
        }
        span{
            background-color: white;
            border: 2px solid orangered;
            padding: 10px;
            font-size: 25px;
            justify-content: center;
            align-items: center;
        }
        span:hover{
            background-color: orangered;
             color: white;
        }
    </style>
</head>
<body>
<table border="2">
    <thead>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Total</th>
    </thead>
    <tbody>
    <td><?php echo $_SESSION["nome"];?></td>
    <td><?php echo $_SESSION["preco"];?></td>
    <td><?php echo $_SESSION["quantidade"];?></td>
    <td><?php echo  $_SESSION["total"];?></td>
    </tbody>
</table>
<a href="apagar.php"><span>Apagar cadastro do produto e de usuário</span></a>
<a href="../index.html">Voltar a página inicial</a>

</body>
</html>

