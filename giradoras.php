<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
spl_autoload_register(function($clase) {
    require "$clase.php";
});
if (isset($_POST['user'])) {

    var_dump($_POST);
    $bd = new conPDO();
    $bd->conectar();
    $bd->controlAcceso($_POST['user'], $_POST['password']);
    $msj = (string) $bd;
    $bd->cerrar();
} else {

    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Giradoras Zepelin</title>
    </head>
    <body>
        <h2><?= $msj ?></h2>
    </body>
</html>
