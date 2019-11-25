<?php 
session_start();
use Mails\Models\Modelo;

include '../Models/Modelo.php';
$modelo = new Modelo();
$modelo->authUser();

?>
<br>
<div class="container">
    <div class="row justify-content-end">
    <form method="post" action="../Controllers/controller-login.php">
				<button class="btn btn-dark" type="submit" name="cerrarSesion">Cerrar Sesion</button>
				</form>
    </div>
</div>