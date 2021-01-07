<?php
header("Content-type:text/html; charset:utf8");

session_start();

$nome = "";
$email = "";
$senha = "";
$endereco = "";

//var_dump($_SESSION);

if(isset($_POST["cadastrar"])){
    if(isset($_POST["nome"]) && !empty($_POST["nome"]) &&
        isset($_POST["email"]) && !empty($_POST["email"]) &&
            isset($_POST["senha"]) && !empty($_POST["senha"]) &&
                isset($_POST["endereco"]) && !empty($_POST["endereco"])){

        $nome = $_POST["nome"];
        $_SESSION["email2"] = $_POST["email"];
        $_SESSION["senha2"] = $_POST["senha"];
        $endereco = $_POST["endereco"];

        echo "<script>
              alert('Usuário cadastrado com successo!!');
              window.location.href= '../index.html';
              </script>";
    }
}else if(isset($_POST{"entrar"})){
    if(isset($_POST["email"]) && !empty("email") && isset($_POST["senha"]) && !empty($_POST["senha"])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if($email == $_SESSION["email2"]){
            if($senha == $_SESSION["senha2"]) { 

              $_SESSION["usuario"] = 1;

                echo "<script>
                      alert('Bem-vindo!!');
                      window.location.href = '../php/cadastro_produto.php';
                      </script>";
            }else{
                echo "<script>
                  alert('Senha incorreta!');
                  window.location.href = '../index.html';
                  </script>";
            }

        }else{
            echo "<script>
                  alert('Email incorreto!');
                  window.location.href = '../index.html';
                  </script>";
        }
    }else{
        header("location: ../index.html");
    }

} else{
    header("location: ../index.html");
}
?>
