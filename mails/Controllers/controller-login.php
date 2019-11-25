<?php 
use Mails\Models\Modelo;

include '../Models/Modelo.php';
$modelo = new Modelo();

if (isset($_POST['loginIn'])) {

 $user = $_POST['user'];
$pass = $_POST['pass'];


$modelo->login($user,$pass);

}

if (isset($_POST['cerrarSesion'])) {

    $modelo->closeLogin();
}

?>