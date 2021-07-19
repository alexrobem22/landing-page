<?php 
// estartar para pega o usuario da outra cessao

if(!$_SESSION['login']){    //se a cessao do usuario nao existir redireciono novamente para a pagina 1
    header('Location: pagina1.php');
    exit();

}
