<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Floribella</title>
</head>
<body>
    <header>
    
		<div id="main-menu">
        
			<nav id="menu-area">
                      
				<ul>
                <div class="logo">
                    <img src="img/becas3.png" alt="Logo">
                </div>  
					<li><a href="/SistemaBecados/index?clase=controladorprincipal&metodo=privado">Inicio</a></li>
					<li><a href="#">Catalogos</a>
						<ul class="submenu-1">
								<li><a href="/SistemaBecados/index?clase=controladorbecas&metodo=AltaBecas">Alta Tipo Becas</a></li>
								<li><a href="/SistemaBecados/index?clase=controladoralumnos&metodo=AltaAlumnos">Registro Alumnos</a></li>
								<li><a href="/SistemaBecados/index?clase=controladorusuarios&metodo=AltaUsuarios">Registro Usuarios</a></li>
						</ul>
					</li>
                    <li><a href="">Reportes</a>
						<ul class="submenu-1">
							
							<li><a href="/SistemaBecados/index?clase=controladorreportes&metodo=reporteBecas">Ver por tipo de beca</a></li>
							<li><a href="/SistemaBecados/index?clase=controladorreportes&metodo=reportePorMatricula">Ver Por Matricula</a></li>
							
						</ul>
					</li>
					<li><a href="/SistemaBecados/index?clase=controladorlogin&metodo=CerrarSesion">Cerrar sesión</a></li>
					
				</ul>
			</nav>
		</div>
	</header>
</body>
</html>