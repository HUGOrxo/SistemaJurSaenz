<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>  
        <link href="css/usereleccion.css" rel="stylesheet"> 
        
    </head>
    
    <body  background ="imagen/im1.jpg">
    
      <h1>INICIAR SESION COMO:
      
      </h1>
        <div class="login-box">                
    <form method="get" action="login.php">
      <div class="user-box">
        <h1>GERENTE</h1>
      </div>
      <img src="imagen/gerente.jpg" style="width: 100px; height: 100px;"> 
      <a class="buton" href="login.php?user_type=GERENTE">INGRESAR</a>
    </form>
  </div>

  <div class="login-box2">                
  <form method="get" action="login.php">
    <div class="user-box">
      <h1>ADMINISTRADOR</h1>
    </div>
    <img src="imagen/secre.jpg" style="width: 100px; height: 100px;"> 
    <a class="buton" href="login.php?user_type=ADMINISTRADOR">INGRESAR</a>
  </form>
</div>

      
    </body>
</html>