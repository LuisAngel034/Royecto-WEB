<?php

class controladorprincipal
{
	private $vista;
	
	
	public function inicio()
	{	
		$vista="Vistas/pages/frmcontenidoinicio.php";
        include_once("Vistas/frmplantilla.php");
    }
	
	public function historia()
	{	
		$vista="Vistas/pages/frmcontenidohistoria.php";
        include_once("Vistas/frmplantilla.php");
    }

	public function galeria()
	{	
		$vista="Vistas/pages/frmcontenidogaleria.php";
        include_once("Vistas/frmplantilla.php");
    }
}
?>