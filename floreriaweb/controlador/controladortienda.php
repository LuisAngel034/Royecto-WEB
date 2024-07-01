<?php

class controladortienda
{
	private $vista;
	
	
	public function tienda()
	{	
		$vista="Vistas/pages/frmcontenidotienda.php";
        include_once("Vistas/frmplantilla.php");
    }
}
?>