
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floribella</title>
    <link rel="stylesheet" href="app/styles/header-and-footer.css">
</head>
<body>
<header id="main-header">
        <div id="main-menu">
            <nav id="menu-area">
                <div class="menu-izq">
                    <ul class="text-menu">
                        <li><a href="http://localhost/floreria?clase=controladortienda&metodo=tienda">Tienda</a></li>
                        <li><a href="http://localhost/floreria?clase=controladorprincipal&metodo=historia">Nuestra Historia</a></li>
                        <li><a href="http://localhost/floreria?clase=controladorprincipal&metodo=galeria">Galeria</a></li>
                    </ul>    
                </div>
                <div class="logo">
                    <a href="http://localhost/floreria/">
                        <img src="app/img/flores.png" alt="Logo" width="50">
                    </a>
                </div>
                <div class="menu-der">
                    <ul>
                        <li><a href="http://localhost/floreria?clase=controladorlogin&metodo=Acceso" class="text-menu">Login</a></li>
                        <a href="#"><img src="app/img/carrito.png" alt="Logo" width="100"></a>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    
    <section class="container">
        <?php include_once($vista); ?>
    </section>



    <footer class="main-footer">
        <div class="container-info">
            <div class="footer-left">
                <ul class="list">
                    <li><a href="http://localhost/floreria/" class="foo-link">Tienda</a></li>
                    <li><a href="http://localhost/floreria?clase=controladorprincipal&metodo=historia" class="foo-link">Nuestra historia</a></li>
                    <li><a href="http://localhost/floreria?clase=controladorprincipal&metodo=galeria" class="foo-link">Galería</a></li>
                    <li><a href="#" class="foo-link">Contacto</a></li>
                </ul>
            </div>
            <div class="social-payments">
                <div class="social">
                    <h3 class="follow">Síguenos</h3>
                    <div class="social-icons">
                        <img src="app/img/whatsapp.png" alt="WhatsApp" width="50">
                        <img src="app/img/facebook.png" alt="Facebook" width="50">
                        <img src="app/img/instagram.png" alt="Instagram" width="50">
                        <img src="app/img/youtube.png" alt="YouTube" width="50">
                    </div>
                </div>
                <div class="payments">
                    <h3 class="methods">Pagos con</h3>
                    <div class="payment-icons">
                        <img src="app/img/Visa.jpg" alt="Visa" width="50">
                        <img src="app/img/mastercard.jpg" alt="MasterCard" width="50">
                        <img src="app/img/oxxo.png" alt="Oxxo" width="50">
                    </div>
                </div>
            </div>
            <div class="description">
                <p>Flores a domicilio con mucho AMOR. Sorprende con AMOR y el mejor servicio de flores frescas a domicilio a todo México.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p> Desarrollado por la Cía. Floribella &copy; 2023 - <?php echo date('Y'); ?>, Inc.
                Todos los derechos reservados - <a href="">Política de privacidad</a> -
                <a href="">Términos de Servicio y condiciones</a>
            </p>
            
        </div>
    </footer>
</body>
</html>