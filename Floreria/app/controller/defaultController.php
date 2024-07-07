<?php
    class defaultController {
        private $vista;

        public function index(){
            $vista = "app/view/homepage/frminicio.php";
            include_once("app/view/frmplantillapublica.php");
        }
    }
?>