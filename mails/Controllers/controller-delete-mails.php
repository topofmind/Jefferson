<?php 

namespace Mails\Controllers;

use Mails\Models\Modelo;

//como incluimos este archivo en envioform.php debemos usar esa ruta como si estuvieramos dentro de la carpeta validate

include '../Models/Modelo.php';

if (isset($_GET['id'])) { 
    $getId = $_GET['id'];
}

$Model = new Modelo();
$Model->deleteAspirante($getId);



echo "<script>alert('Usuario Eliminado Exitosamente'); window.location.href='../views/list-mails.php'</script>";




//echo "Hola"
// empaque
// retenedor




?>