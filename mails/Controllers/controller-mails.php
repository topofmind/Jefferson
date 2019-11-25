<?php 

use Mails\Models\Modelo;

//como incluimos este archivo en envioform.php debemos usar esa ruta como si estuvieramos dentro de la carpeta validate

include '../mails/Models/Modelo.php';

$Model = new Modelo();

$Model->getData();
$Model->setData();


//echo "Hola"
// empaque
// retenedor




?>