<?php

class controladorprincipal
{
	private $vista;
	
	public function historia()
	{	
		$vista="app/view/homepage/frmnuestrahistoria.php";
        include_once("app/view/frmplantillapublica.php");
    }

	public function galeria()
	{	
		$vista="app/view/homepage/frmgaleria.php";
        include_once("app/view/frmplantillapublica.php");
    }
}
?>

            