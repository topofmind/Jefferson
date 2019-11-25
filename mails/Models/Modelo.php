<?php 

namespace Mails\Models;

use Mails\Models\Conexion;

include_once 'config.php';

class Modelo extends Conexion
{

    public $tabla;
    private $arreglonombres=[];
	private $arreglovalores=[];
	private $cadenanombres;
	private $cadenavalores;

    public function getData(){
			
        foreach ($_POST as $nombres => $valores) {

            if (is_array($nombres) || is_array($valores)) {
                unset($nombres);
                unset($valores); 
            }else{

            $this->arreglonombres[]=$nombres;
            $this->arreglovalores[]=$valores;
            
            //eliminar el primer valor que hace referencia al nombre del formulario
            

            }

        }
        $this->cadenanombres=implode($this->arreglonombres,",");
        $this->cadenavalores=implode($this->arreglovalores,",");
        echo $this->cadenanombres;
         echo "<hr>";
        echo $this->cadenavalores;
        echo "<br>";

    }

    public function setData(){
        
        $sql ="INSERT INTO `aspirante`(`nombre`, `apellido`, `fechaNacimiento`,`jardin`,`direccion`) VALUES (:nombre,:apellido,:fechaNacimiento, :jardin, :direccion)";

		$query =  $this->pdo->prepare($sql);

		$result = $query->execute([
			'nombre'=>$this->arreglovalores[1],
			'apellido'=>$this->arreglovalores[2],
            'fechaNacimiento'=>$this->arreglovalores[3],
            'jardin'=>$this->arreglovalores[4],
            'direccion'=>$this->arreglovalores[5]
                
		]);

        $id_as = $this->pdo->lastInsertId();

        
        $sql ="INSERT INTO `padre`(`id_as`,`nombrePadre`, `celularPadre`, `emailPadre`,`profesionPadre`,`cargoPadre`, `egresadoPadre`) VALUES (:id, :nombrePadre, :celularPadre, :emailPadre, :profesion, :cargo, :egresado)";

		$query =  $this->pdo->prepare($sql);

		$result = $query->execute([
            'id'=>$id_as,
			'nombrePadre'=>$this->arreglovalores[6],
			'celularPadre'=>$this->arreglovalores[7],
            'emailPadre'=>$this->arreglovalores[8],
            'profesion'=>$this->arreglovalores[9],
            'cargo'=>$this->arreglovalores[10],
            'egresado'=>$this->arreglovalores[11]
                
        ]);

        
        $sql ="INSERT INTO `madre`(`id_as`,`nombreMadre`, `celularMadre`, `emailMadre`,`profesionMadre`,`cargoMadre`,`egresadoMadre`) VALUES (:id, :nombreMadre, :celularMadre, :emailMadre, :profesion, :cargo, :egresado)";

		$query =  $this->pdo->prepare($sql);

         $result = $query->execute([
            'id'=>$id_as,
			'nombreMadre'=>$this->arreglovalores[12],
			'celularMadre'=>$this->arreglovalores[13],
            'emailMadre'=>$this->arreglovalores[14],
            'profesion'=>$this->arreglovalores[15],
            'cargo'=>$this->arreglovalores[16],
            'egresado'=>$this->arreglovalores[17]
                
        ]);

        
        $sql ="INSERT INTO `fechaOH`(`id_as`,`fecha1`) VALUES (:id, :fecha)";

		$query =  $this->pdo->prepare($sql);

		$result = $query->execute([
            'id'=>$id_as,
			'fecha'=>$this->arreglovalores[18]
		]);

    }

    public function selectData(){

        $queryResult  = $this->pdo->query("SELECT aspirante.*,fechaOH.*,padre.*,madre.*
                FROM aspirante
                INNER JOIN fechaOH ON fechaOH.id_as = aspirante.id
                INNER JOIN padre ON padre.id_as = fechaOH.id_as
                INNER JOIN madre ON madre.id_as = padre.id_as");
        
        return $queryResult;
    }

    public function selectPersonData($id_as){

        $sql  = "SELECT aspirante.*,fechaOH.*,padre.*,madre.*
                FROM aspirante
                INNER JOIN fechaOH ON fechaOH.id_as = aspirante.id
                INNER JOIN padre ON padre.id_as = fechaOH.id_as
                INNER JOIN madre ON madre.id_as = padre.id_as
                WHERE aspirante.id = :id";
        
        $query = $this->pdo->prepare($sql);

        $result = $query->execute([
            'id'=>$id_as
            
        ]);
        
        return $query;
    }

    public function deleteAspirante($id){
        
        $queryResult = $this->pdo->query("DELETE FROM aspirante WHERE `id` = ".$id);
        $queryResult = $this->pdo->query("DELETE FROM fechaOH WHERE `id_as` = ".$id);
        $queryResult = $this->pdo->query("DELETE FROM madre WHERE `id_as` = ".$id);
        $queryResult = $this->pdo->query("DELETE FROM padre WHERE `id_as` = ".$id);
    }


    function login($user,$pass){

        $result = false;
            $sql = "SELECT * FROM admin WHERE user = :nombre AND password = :clave";

        $query = $this->pdo->prepare($sql);

        $result = $query->execute([
            'nombre'=>$user,
            'clave'=>$pass
        ]);

        $row = $query->rowCount();

        if (isset($user) && isset($pass)) {
            
            if (empty($user) || empty($pass)) {
                
                header('location:../index.php?error=1');
            }else{

                if($row == 1){

                    //creamos una sesion
                    session_start();

                    //asignamos un valor a la variable sesion
                    $_SESSION['usuario'] = $user;

                    header('location:../views/list-mails.php');
                }else{
                    header('location:../index.php?error=2');
                }
            }
        }else{
            header('location:../index.php?error=3');
        }
    }

    public function closeLogin(){
        

        if (isset($_POST['cerrarSesion'])) {
            
            session_start();//para saber cual es la sesion a destruir
            session_unset();//para eliminar las variables de sesion
            session_destroy();//con esto destruyes la sesion
            header ('Location:../index.php');

        }

    }

    public function authUser(){
        if (!isset($_SESSION['usuario'])) {
        
            session_start();
            session_destroy();
            header('location:../index.php?error=4');
        }
    }

}


?>