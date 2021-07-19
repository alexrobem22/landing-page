
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/pagina1.css">

     <!--responsividade-->
     <link rel="stylesheet" href="style/responsividade-pagina1.css">
     
    <title>Black Friday</title>
</head>
<body>

    <header>

        <div class="container">
            
         <h1 class="logo">Seja Bem Vindo</h1>
         

         <nav> 
         <a href="pagina2-cadastro.php" class="botao">CADASTRAR</a>

         </nav>
            
        </div>  
    </header>

    <main>
        <div class="usuario">
        <div class="login">
         
            <form method="POST" action="pagina-validacao.php">
            <h2 class="h2">LOGIN</h2>
            <input type="text" name="login" placeholder="digite o login">
            <br/><br/>
            
            <input type="password" name="senha" placeholder="digite a senha">
            <br/><br/>
           
            
           <button role="button" type="submit" class="botao">

           ENTRAR

           </button>
            </form>
        </div>
        
        </div>    
        
    </main>
    
</body>
</html>