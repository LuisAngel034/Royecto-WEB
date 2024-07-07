<?php
    class controladortienda
    {
        private $vista;

        public function tienda(){
            $vista = "app/view/homepage/frmtienda.php";
            include_once("app/view/frmplantillapublica.php");
        }
    }
?>