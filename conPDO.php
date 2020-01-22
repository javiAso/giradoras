<?php

class conPDO {

    private $con;
    private $estado;

    public function __construct() {

        $this->con = $this->conectar();
    }

    public function conectar(): PDO {

        $host = '172.17.0.3';
        $bd = 'giradoras';
        $user = 'root';
        $pass = 'root';

        $dsn = "mysql:host=$host;dbname=$bd";
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );


        try {
            $con = new PDO($dsn, $user, $pass, $opciones);

            $this->estado = "<h1>Conectado!!</h1>";
        } catch (PDOException $e) {

            die("No se ha podido conectar " . $e->getMessage());
            $this->estado = "<h2>No se ha podido conectar</h2>";
            $this->estado .= "<h3>Error número " . $e->getMessage() . "</h2>";
        }

        return $con;

        //Verificamos si ha habido algún error o nos hemos conectado
        //Si es exactamente igual a cero es que no ha habido error
    }

    function controlAcceso($user, $pass) {

        try {

            $sentencia = $this->con->prepare('Select * from usuarios where name=:name and password=:password');
            $parametros = array(':name' => $user, ':password' => $pass);
            $sentencia->execute($parametros);
            var_dump($sentencia);
            $f = $sentencia->fetch(PDO::FETCH_ASSOC);
            var_dump($f);
            if (!$f) {
                $mensaje = "Login incorrecto";
                header("Location:index.php?mensaje=$mensaje");
            }
        } catch (PDOException $exc) {
            $this->estado .= $exc;
        }
    }

    public function getCon() {

        return $this->estado;
    }

//    public function insertar($nombre, $telefono) {
//
//
//        //exec para insert, delete y update
//
//        $insercion = "insert into tienda (nombre, telefono) values('$nombre', '$telefono')";
//
//        try {
//            $this->con->exec($insercion);
//            $sentencia = $this->con->prepare("SELECT codigo FROM tienda where nombre=:nombre");
//            $parametros = array(':nombre' => $nombre);
//            $sentencia->execute($parametros);
//            $cod;
//            //Alguna otra manera de llegar hasta el final sin recorrer todo el statement?
//            while ($f = $sentencia->fetch(PDO::FETCH_ASSOC)) {
//                $cod = $f['codigo'];
//            }
//            $this->estado .= "Se ha agregado la tienda con código $cod nombre: $nombre teléfono: $telefono";
//        } catch (PDOException $e) {
//            $this->estado .= "No se ha podido insertar";
//            $this->estado .= $e->getMessage();
//        }
//    }
//
//    public function muestraTabla($tabla) {
//
//
//        try {
//            $sentencia = $this->con->prepare("SELECT * FROM tienda");
//            //Xk no puedo preparar el nombre de la tabla?
//            //$sentencia->bindParam(':tabla', $tabla);
//            // $parametros = array(':tabla'=>$tabla);
//            $sentencia->execute();
//            $tabla = "<table border=1>";
//            $tabla .= "<tr><th>Código</th><th>Nombre</th><th>Teléfono</th></tr>";
//
//            while ($f = $sentencia->fetch(PDO::FETCH_ASSOC)) {
//
//                $tabla .= "<tr>";
//                $tabla .= "<td>" . $f['codigo'] . "</td>";
//                $tabla .= "<td>" . $f['nombre'] . "</td>";
//                $tabla .= "<td>" . $f['telefono'] . "</td>";
//                $tabla .= "</tr>";
//            }
//            $tabla .= "</table>";
//        } catch (PDOException $e) {
//
//            $this->estado .= "Error, no se ha podido hacer el select" . $e->getMessage();
//        }
//
//        return $tabla;
//    }
    //Liberamos el atributo que esun recurso de la clase mysqli
    public function cerrar() {
        $this->con = null;
    }

    public function __toString() {
        return $this->estado;
    }

}
