<?php

include_once('app/model/clsLogin.php');

class controladorlogin
{
	private $vista;
	
	public function Acceso()
	{
		$login=new clsLogin();
		if(empty($_POST))
		{
			
			$vista="app/view/access/frmlogin.php";
			include_once("app/view/frmplantillapublica.php");
		}
		else
		{

			$usuario=$_POST['txtusuario'];
			$password=$_POST['txtpassword'];
			$datos=$login->Acceder($usuario,$password);
			if($datos->num_rows > 0)
			{
				$vista="app/view/homepage-private/frmcontenidoprivado.php";
			    include_once("app/view/frmplantillaprivada.php");
			}
			else
			{
				$vista="app/view/homepage-private/frmcontenidopublico.php";
			    include_once("app/view/frmplantillapublica.php");
			}
					
		}
		
	}
	public function CerrarSesion()
	{
		//aqui se elimina la sesion
		$vista="Vistas/Principal/frmcontenidopublico.php";
	    include_once("Vistas/frmplantillapublica.php");
	}
	
}
?>