<?php 
 $mbd = null;
 
    try{
            $servidor ="localhost";
            $usuario ="root";
            $clave = "";
            $mbd = new PDO('mysql:host=localhost;dbname=sisjursaenz', $usuario, $clave);
           
        
    }
    catch(PDOException $e){
            echo"ERROR AL CONECTAR ";
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
    }
    return $mbd;
            

?>