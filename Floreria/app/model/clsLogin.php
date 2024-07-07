<?php
include_once 'app/model/clsconexion.php';

class clsLogin extends clsconexion
{
	
	public function Acceder($usuario,$password)
	{
		$sql = "CALL spAcceder('$usuario', '$password');";
       
		$resultado =$this->conectar->query($sql);
		return $resultado;
	}
	
}

?>