<?php
session_start();

include_once("conexao.php");
// [  ||  ] significa [] ou ]
if(empty($_POST['login']) || empty($_POST['senha'])){ //se login ou senha for vazia ele volta pra pagina1
    header('Location: pagina1.php');
    exit();
}

// essa funcao ajuda a proteger contra hack
$login = mysqli_real_escape_string($con, $_POST['login']); 
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$consulta = "SELECT senha, loginn FROM usuario WHERE loginn = '$login' and senha = '$senha'";//compara se login e senha sao iguais

$resultado = mysqli_query($con, $consulta);//recebe o resultado
$row = mysqli_fetch_assoc($resultado);

if($row['senha'] == $senha){
    $_SESSION['login'] = $login;//login logado com sucesso
    echo "<script>alert('Login efetuado com SUCESSO '); location.href='black-friday.php';</script>";
    //header('location: flix-amigos.php');//manda para outra pagina
    exit();
}else{
    echo "<script>alert('Login ou Senha ERRADA'); location.href='pagina1.php';</script>";
    exit();
}


// header('Location: index.html');
//exit;
