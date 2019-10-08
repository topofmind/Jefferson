<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TSZK4XM');</script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108805524-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108805524-1');
  </script>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
  <?php include_once '../ES/tagMannager.php' ?>


<?php
error_reporting(E_ALL);
error_reporting(-1);

echo $nameForm= $_POST['nameForm']."<br>";

if($_POST['nameForm'] == "FormCafe" || $_POST['nameForm'] == "FormOpenHouse"){

  $asunto = "Formulario Open House";

  echo "Datos Aspirandee <br>";
  
  echo $nombre= $_POST['nombre']."<br>";
  echo $apellido = $_POST['apellido']."<br>";
  echo $fechaN = $_POST['fechaNacimiento']."<br>";
  echo $jardin = $_POST['jardin']."<br>";
  echo $direccion = $_POST['direccion']."<br>";
  
  echo "<br>";
  
  echo "Datos Padre <br>";
  echo $nombreP = $_POST['nombrePadre']."<br>";
  echo $celularP = $_POST['celularPadre']."<br>";
  echo $emailP = $_POST['emailPadre']."<br>";
  echo $egresadP = $_POST['egresado']."<br>";
  echo $profesionP = $_POST['profesion']."<br>";
  echo $CargoP = $_POST['cargo']."<br>";
  
  echo "<br>";
  
  echo "Datos Madre <br>";
  echo $nombreM = $_POST['nombreMadre']."<br>";
  echo $celularM = $_POST['celularMadre']."<br>";
  echo $emailM = $_POST['emailMadre']."<br>";
  echo $egresadM = $_POST['egresadoM']."<br>";
  echo $profesionM = $_POST['profesionMadre']."<br>";
  echo $CargoM = $_POST['cargoMadre']."<br>";
  
  echo "<br>";

  echo "Politicas de tratamiento de datos personales <br>";
  echo $politicas = $_POST['politicas']."<br>";

  $message ='<b>Nombre Aspirante: </b> '.$nombre.''.$apellido.
  '<br><b>Fecha de Nacimiento: </b> '.$fechaN.
  '<br><b>Nombre Padre: </b> '.$nombreP.
  '<br><b>Celular Padre: </b> '.$celularP.
  '<br><b>E-mail Padre: </b> '.$emailP.
  '<br><b>Egresado Padre: </b> '.$egresadP.
  '<br><b>Nombre Madre: </b> '.$nombreM.
  '<br><b>Celular Madre: </b> '.$celularM.
  '<br><b>E-mail Madre: </b> '.$emailM.
  '<br><b>Egresado Madre: </b> '.$egresadM.
  '<br><b>Políticas de tratamiento de datos personales: </b>'.$politicas;

  $url = 'inscripcion-open-house.php';

  if(isset($_POST['nameForm']) && $_POST['nameForm'] == "FormCafe"){

    $asunto = "Formulario Café con Admisiones";

    if(isset($_POST['fecha1'])){ echo $fecha1 = $_POST['fecha1']."<br>"; }else{$fecha1 = '';}
    if(isset($_POST['fecha2'])){ echo $fecha2 = $_POST['fecha2']."<br>"; }else{$fecha2 = '';}
    if(isset($_POST['fecha3'])){ echo $fecha3 = $_POST['fecha3']."<br>"; }else{$fecha3 = '';}

    $message ='<b>Nombre Aspirante: </b> '.$nombre.''.$apellido.
    '<br><b>Fecha de Nacimiento: </b> '.$fechaN.
    '<br><b>Jardín o Colegio: </b> '.$jardin.
    '<br><b>Dirección: </b> '.$direccion.

    '<br><b>Nombre Padre: </b> '.$nombreP.
    '<br><b>Celular Padre: </b> '.$celularP.
    '<br><b>E-mail Padre: </b> '.$emailP.
    '<br><b>Egresado Padre: </b> '.$egresadP.
    '<br><b>Profesión Padre: </b> '.$profesionP.
    '<br><b>Cargo Padre: </b> '.$CargoP.

    '<br><b>Nombre Madre: </b> '.$nombreM.
    '<br><b>Celular Madre: </b> '.$celularM.
    '<br><b>E-mail Madre: </b> '.$emailM.
    '<br><b>Egresado Madre: </b> '.$egresadM.
    '<br><b>Profesión Madre: </b> '.$profesionM.
    '<br><b>Cargo Madre: </b> '.$CargoM.

    '<br><b>Asistencias Café con admisiones: </b>'.$fecha1.' '.$fecha2.' '.$fecha3.
    '<br><b>Políticas de tratamiento de datos personales: </b>'.$politicas
    ;

    $url = 'inscripcion-cafe-admisiones.php';
  
  }

}

if(isset($_POST['nameForm']) && $_POST['nameForm'] == 'FormSugerencias'){

  $asunto = "Formulario Sugerencias";

  echo $nombre= $_POST['nombre']."<br>";
  echo $direccion= $_POST['direccion']."<br>";
  echo $email= $_POST['email']."<br>";
  echo $telefono= $_POST['telefono']."<br>";
  echo $tipoSoicitud= $_POST['tipoSolicitud']."<br>";
  echo $asunto2= $_POST['asunto']."<br>";
  echo $mensaje= $_POST['mensaje']."<br>";
  echo $politicas= $_POST['politicas']."<br>";

  echo $message ='<b>Nombre: </b> '.$nombre.
    '<br><b>Dirección: </b> '.$direccion.
    '<br><b>Email: </b> '.$email.
    '<br><b>telefono: </b> '.$telefono.
    '<br><b>Tipo de solicitud: </b> '.$tipoSoicitud.
    '<br><b>Asunto: </b> '.$asunto2.
    '<br><b>Mensaje: </b> '.$mensaje.
    '<br><b>Políticas de tratamiento de datos personales: </b> '.$politicas;
    
    $url = 'sugerencias.php';
}

if(isset($_POST['nameForm']) && $_POST['nameForm'] == 'FormVinculo'){

  $asunto = "Formulario Vínculo con el Colegio";

  echo $nombre= $_POST['nombre']."<br>";
  echo $apellido= $_POST['apellido']."<br>";
  echo $promocion= $_POST['promocion']."<br>";
  echo $fechaCumple= $_POST['fechaCumple']."<br>";
  echo $celular= $_POST['celular']."<br>";
  echo $email= $_POST['email']."<br>";
  echo $politicas= $_POST['politicas']."<br>";

  echo $message ='<b>Nombre: </b> '.$nombre.
    '<br><b>Apellido: </b> '.$apellido.
    '<br><b>Promoción: </b> '.$promocion.
    '<br><b>Cumpleaños: </b> '.$fechaCumple.
    '<br><b>Celular: </b> '.$celular.
    '<br><b>Email: </b> '.$email.
    '<br><b>Políticas de tratamiento de datos personales: </b> '.$politicas;

    $url = 'vinculo-colegio.php';
}


if(isset($_POST['nameForm']) && $_POST['nameForm'] == 'FormContacto'){

  $asunto = "Formulario Contáctanos";

  echo $nombre= $_POST['nombre']."<br>";
  echo $celular= $_POST['celular']."<br>";
  echo $email= $_POST['email']."<br>";
  echo $politicas= $_POST['politicas']."<br>";

  echo $message ='<b>Nombre: </b> '.$nombre.
    '<br><b>Celular: </b> '.$celular.
    '<br><b>Email: </b> '.$email.
    '<br><b>Políticas de tratamiento de datos personales: </b> '.$politicas;

    $url = 'contactanos.php';

}

if(isset($_POST['nameForm']) && $_POST['nameForm'] == 'FormTrabajar'){
  
  $asunto = "Formulario Trabaja con nosotros";

  echo $nombre= $_POST['nombre']."<br>";
  echo $telefono= $_POST['telefono']."<br>";
  echo $titulo= $_POST['titulo']."<br>";
  echo $cargoAspira= $_POST['cargoAspira']."<br>";
  echo $email= $_POST['email']."<br>";
  echo $mensaje= $_POST['mensaje']."<br>";
  echo $politicas= $_POST['politicas']."<br>";



  echo $message ='<b>Nombre: </b> '.$nombre.
  '<br><b>Telefono: </b> '.$telefono.
  '<br><b>Titulo Académico: </b> '.$titulo.
  '<br><b>Cargo al que aspira: </b> '.$cargoAspira.
  '<br><b>Email: </b> '.$email.
  '<br><b>Descripción del Perfil: </b> '.$mensaje.
  '<br><b>Políticas de tratamiento de datos personales: </b> '.$politicas;

  $url = 'trabaja-nosotros.php';

  if($_FILES['hdv']){
    
    $tamano_archivo = $_FILES['hdv']['size'];
    $tipo_archivo = $_FILES['hdv']['type'];
    $nombre_archivo = $_FILES['hdv']['name'];
    $ruta_archivos = $_FILES['hdv']['tmp_name'];

    if($tamano_archivo <= 2000000 && strpos($tipo_archivo, "pdf")){

      echo "enviar";

    }else{
      echo "<script>alert('Archivo adjunto no valido');document.location='../ES/".$url."'</script>";

    }

  }

}

  require 'PHPMailerAutoload.php';
  //Create a new PHPMailer instance
  $mail = new PHPMailer;

  $mail->isSMTP();

  $email->SMTPDebug = 1;
                                        // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'admin@jefferson.edu.co';                 // SMTP username
  $mail->Password = 'Temporal.2016';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to


  //Set who the message is to be sent from
  $mail->setFrom('admin@jefferson.edu.co', 'Sitio Web Jefferson');
  //Set an alternative reply-to address
  //$mail->addReplyTo('admin@jefferson.edu.co', 'Camilo Moncada');
  //Set who the message is to be sent to
  if ($_POST['nameForm'] == 'FormOpenHouse') {
      $mail->addAddress('asismercadeo@jefferson.edu.co', 'Sitio Web');
  }

  if ($_POST['nameForm'] == 'FormCafe') {
      $mail->addAddress('asismercadeo@jefferson.edu.co', 'Sitio Web');
      $mail->addAddress('arojas@jefferson.edu.co', 'Sitio Web');
  }

  if ($_POST['nameForm'] == 'FormSugerencias') {
      $mail->addAddress('sugerencias@jefferson.edu.co', 'Sitio Web');
  }

  if ($_POST['nameForm'] == 'FormVinculo') {
      $mail->addAddress('egresados@jefferson.edu.co', 'Sitio Web');
  }

  if ($_POST['nameForm'] == 'FormContacto') {
      $mail->addAddress('asismercadeo@jefferson.edu.co', 'Sitio Web');
  }

  if ($_POST['nameForm'] == 'FormTrabajar') {
      $mail->addAddress('gestionhumana@jefferson.edu.co', 'Sitio Web');
  }
 
 $mail->addAddress('admin@jefferson.edu.co', 'Sitio Web');


  //Set the subject line
  $mail->Subject = $asunto;
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  // $mail->msgHTML(file_get_contents('reclamos.php'), dirname(__FILE__));
  $mail->Body =  $message;
  //Replace the plain text body with one created manually
  $mail->AltBody = 'This is a plain-text message body';
  //Attach an image file
  
  if($_FILES['hdv']){

    $mail->addAttachment($ruta_archivos,$nombre_archivo);
  }

  $mail->CharSet = 'UTF-8';
  //send the message, check for errors
  if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
      echo "<script>alert('Fromulario enviado con exito');document.location='../ES/".$url."'</script>";
  }

?>

</body>
</html>