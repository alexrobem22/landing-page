<?php

include_once("conexao.php");

// [  ||  ] significa [] ou ]
if(empty($_POST['email']) || empty($_POST['login']) || empty($_POST['senha']) ){ //se login ou senha for vazia ele volta pra pagina1 o empty faz essa funcao
    header('Location: pagina2-cadastro.php');
    exit();
}
/*if(empty($_POST['email']) || empty($_POST['login'])){ //se email ou login for vazia ele volta pra pagina1
    header('Location: pagina2-cadastro.html');
    exit();
}
if(empty($_POST['email']) || empty($_POST['senha'])){ //se email ou senha for vazia ele volta pra pagina1
    header('Location: pagina2-cadastro.html');
    exit();
}*/

$email = mysqli_real_escape_string($con, trim($_POST['email'])); //para tira o espaco do começo e fim quando o usuario digitar
$login = mysqli_real_escape_string($con, trim($_POST['login'])); 
$senha = mysqli_real_escape_string($con, trim($_POST['senha']));


$consulta = "SELECT * from usuario where email = '$email'";
$resultado = mysqli_query($con, $consulta);
$row = mysqli_fetch_assoc($resultado);



$consulta1 = "SELECT * from usuario where loginn = '$login'";
$resultado1 = mysqli_query($con, $consulta1);
$row1 = mysqli_fetch_assoc($resultado1);




$emailbd = $row['email'];
$loginbd = $row1['loginn'];

    if(!$emailbd == $email && !$loginbd == $login){

        $inserindo = "INSERT INTO usuario (loginn, senha, email, data) values ('$login', '$senha', '$email', NOW())";
        $jogando_dentro_BD = mysqli_query($con, $inserindo);
        echo "<script>alert('Cadastrado com SUCESSO'); location.href='pagina1.php';</script>";
         
    }else{

        echo "<script>alert('login ou email já existe'); location.href='pagina2-cadastro.php';</script>";
        
     
    }
  





/*$inserindo = "INSERT INTO usuario (loginn, senha, email, data) values ('$login', '$senha', '$email', NOW())";
        $jogando_dentro_BD = mysqli_query($con, $inserindo);
        echo "<script>alert('Cadastrado com SUCESSO'); location.href='pagina1.php';</script>";*/

















