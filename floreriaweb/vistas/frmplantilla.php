<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<link rel="stylesheet" href="estilos/styleinicio.css">

</head>
<body>
    
    <header>
    
		<div id="main-menu">
        
			<nav id="menu-area">
                      
				<ul>
                      
					<li><a href="/floreriaweb/index?clase=controladortienda&metodo=tienda">Tienda</a></li>

					<li><a href="/floreriaweb/index?clase=controladorprincipal&metodo=historia">Nuestra Historia</a></li>

                    <li><a href="/floreriaweb/index?clase=controladorprincipal&metodo=galeria">Galería</a></li>
                    
                    <div class="logo">
                        <a href="/floreriaweb/index?clase=controladorprincipal&metodo=inicio">
                            <img src="img/flores.png" alt="Logo" width="50">
                        </a>
                    </div>

                    <li><a href="/floreriaweb/index?clase=controladorform&metodo=formulario">Iniciar Sesión</a></li>
                    <div class="logo">
                    <img src="img/carrito.png" alt="Logo" width="100">
				</ul>
                
			</nav>
		</div>
	</header>  

     <!-- Este es el cuerpo -->
     <?php include_once($vista); ?> 

<!-- Este es el pie de la pagina -->
<br>
<footer>

    <p> Desarrollado por la Cía. [Nombre de la florería] &copy; 2023 - <?php echo date('Y'); ?>, Inc.
    Todos los derechos reservados - <a href="">Política de privacidad</a> -
    <a href="">Términos de Servicio y condiciones</a></p>

</footer>

</body>
</html>