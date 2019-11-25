<?php require_once './sesion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container.min{
            max-width:900px;
            margin:15px auto;
            padding:2em 2em;
            /* border: 2px solid; */
            border-radius: 1em;
            box-sizing:border-box;
            background: #1565c0;
        }
        .container.min h1{
            color:white;
        }
        .cont.info{
            padding-top:1em;
            margin-top:1.2em;
        }
        .cont.info .row{
            margin-bottom:20px;
        }
        .cont.info p{
            font-size:18px;
            margin-bottom:8px;
        }
        .information{
            padding:1em;
            box-sizing:border-box;
            box-shadow: 0em 0em 0.5em rgba(0,0,0,0.5);
            max-width:400px;
            width:100%;
            border-radius:0.5em;
            background:white;
        }
        .fecha{
            border-radius: 0.4em;
            border: 2px solid #1565c0;
            padding:0.4em;
            color:#1565c0;
            margin: 0 auto;
            box-sizing:border-box;
            display: inline-block;
        }
        .row button.btn{
            margin: 0 10px;
        }
        @media print{
            .btn.btn-dark,.btn.btn-light{
                display: none;
            }
        }
    </style>
</head>
<body>


    <div class="container min">
        <div class="row justify-content-center">
           <h1 class="text-center">Regitro Asistencia Café con Admisiones Familias Nuevas</h1>
        </div>
            
    <?php 
    
        use Mails\Models\Modelo;
	    require_once '../Models/Modelo.php';
        $Model = new Modelo();
        
        if (isset($_GET['id'])) {
            $getId = $_GET['id'];
        }
        
        $result= $Model->selectPersonData($getId);



        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    
    ?>

        <div class="cont info">

            <div class="row justify-content-around">
                <div class="information">
                    <h3>Datos Aspirante</h3>
                    
                    <p>Nombre Completo: <?php echo utf8_encode($row["nombre"]).' '; echo utf8_encode($row["apellido"]); ?> </p>
                    <p>Fecha de Nacimiento: <?php echo utf8_encode($row["fechaNacimiento"]) ?></p>
                    <p>Dirección: <?php echo utf8_encode($row["direccion"]) ?></p>
                    <p>Jardín: <?php echo utf8_encode($row["jardin"]) ?></p>
                </div>
                <div class="information">
                    <h3>Fecha Open House</h3>
                    <div class="fecha">
                        <p><?php echo utf8_encode($row["fecha1"]) ?></p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-around">
                <div class="information">
                    <h3>Datos Padre</h3>
                    <p>Nombre: <?php echo utf8_encode($row["nombrePadre"]) ?></p>
                    <p>Celular: <?php echo utf8_encode($row["celularPadre"]) ?></p>
                    <p>Email: <?php echo utf8_encode($row["emailPadre"]) ?></p>
                    <p>Profesión: <?php echo utf8_encode($row["profesionPadre"]) ?></p>
                    <p>Cargo: <?php echo utf8_encode($row["cargoPadre"]) ?></p>
                    <p>Egresado: <?php echo utf8_encode($row["egresadoPadre"]) ?></p>
                </div>
                <div class="information">
                    <h3>Datos Madre</h3>
                    <p>Nombre: <?php echo utf8_encode($row["nombreMadre"]) ?></p>
                    <p>Celular: <?php echo utf8_encode($row["celularMadre"]) ?></p>
                    <p>Email: <?php echo utf8_encode($row["emailMadre"]) ?></p>
                    <p>Profesión: <?php echo utf8_encode($row["profesionMadre"]) ?></p>
                    <p>Cargo: <?php echo utf8_encode($row["cargoMadre"]) ?></p>
                    <p>Egresado: <?php echo utf8_encode($row["egresadoMadre"]) ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <a href="./list-mails.php">
                    <button type="button" class="btn btn-light">Volver</button>
                </a>
                <a href="">
                   <!-- <button type="button" class="btn btn-danger">Eliminar</button> -->
                </a>
            </div>

        </div>
    </div>


    

    <?php 
        }
    
    ?>
    


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>