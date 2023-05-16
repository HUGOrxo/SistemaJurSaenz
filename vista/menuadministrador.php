<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Gerente</title>

    <link rel="stylesheet" href="./css/menuGerente.css">
</head>

<body>
    <header>
        <div class="continer-header">
            <img src="./imagen/logo.jpg" alt="">
            <h1>ESTUDIO JURIDICO SAENZ</h1>
            <ul>
                <li><?php echo "Gerente:Nicolay" ?></li>
                <li><a href="./usereleccion.php">Cerrar Seccion</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="cuadro" >
                <a href="gestionusuario.php">GESTIONAR AGENDAS</a> 
            </div>
            <div class="cuadro">
                <a href="gestionrepostes.php">GESTIONAR CANTIDAD DE CASOS </a>
            </div>
            <div class="cuadro">
                <a href="gestionespediente.php">GESTIONAR PRECIOS</a>
            </div>
            <div class="cuadro">
                <a href="proximacita.php">GESTIONAR EXPEDIENTES</a>
            </div>
            <div class="cuadro">
                <a href="proximacita.php">VER CALENDARIO</a>
            </div>
            <div class="cuadro">
                <a href="proximacita.php">RECORDAR AUDIENCIA</a>
            </div>
        </div>

        </div>   
    </main>

    <footer>
        <div class="copyright">
            <p>&copy Copyright 2023</p>
        </div>
    </footer>


  </body>
</html>