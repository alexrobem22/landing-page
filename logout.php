<?php
session_start();
session_destroy();//aqui destroi todas as sessoes
header('location: pagina1.php');
exit();


//unset($_SESSION['e o nome da sesaao']); // aqui destroi uma sessao



