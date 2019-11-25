<?php 

namespace Mails\Models;
use \PDO as PDO;

class Conexion 
{

	private $user="root";//jeffepyd_adMails
	private $password="";//B+6X%H]^Ay[}
	private $host="localhost";
	private $db="jeffepyd_mails";//jeffepyd_mails
	protected $pdo;
	
	function __construct()
	{
		try {
		$this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "conectado";
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}



 ?>