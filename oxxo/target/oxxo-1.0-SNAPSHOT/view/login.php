<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="/src/main/webapp/recursos/css/ingreso.css">
    <link rel="stylesheet" href="/src/main/webapp/recursos/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="/src/main/webapp/recursos/js/jq/jquery-3.6.1.min.js"></script>
    <link rel="icon" href="/src/main/webapp/recursos/res/logo/oxxo-asi-de-facil.png">
</head>

<body>
    <header class="header sticky-top">
        <div class="logo">
            <img src="res/logo/oxxologo.png" class="rounded" alt="Logo de la marca">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="inicio.html">Inicio</a></li>
                <li><a href="about.html">Quiénes Somos</a></li>
                <li><a href="promociones.html">Promociones</a></li>
                <li><a href="contacto.html">Contáctanos</a></li>
            </ul>
        </nav>
        <a href="login.html" class="boton"><button>Login</button></a>

        <a onclick="openNav()" class="menu"><button>Menu</button></a>

        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="inicio.html">Inicio</a>
                <a href="about.html">Quiénes Somos</a>
                <a href="promociones.html">Promociones</a>
                <a href="contacto.html">Contáctanos</a>
            </div>
        </div>
    </header>
    </br>
    </br>
    <div class="container">
        <h1 style="text-align: center">Inicio de Sesión</h1>
        <form style="max-width: 400px; margin: 0 auto;">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="usuario" placeholder="Ingrese Usuario" name="usuario">
                <label for="usuario">Usuario</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="clave" placeholder="Ingrese Contraseña" name="clave">
                <label for="clave">Contraseña</label>
            </div>
            <div class="olvidar" style="text-align: center">
                <label for=""><input type="checkbox"> Recordar</label>
                <a href="#">¿Olvidaste tu Contraseña?</a>
            </div>
            </br>
                <button type="submit" class="presion btn btn-danger">Ingresar</button>
            </br>
            <div class="registro">
                <p style="text-align: center">¿No tienes una cuenta?<a href="#">Registrate</a></p>
            </div>
        </br>
        </form>
    </div>
    </br>
    </br> 

    <footer class="footer">
        <div class="contenido">
            <div class="wow">
                <div class="footer-col">
                    <h4>Mundo</h4>
                    <ul>
                        <li><a href="inicio.html">Inicio</a></li>
                        <li><a href="about.html">Quiénes Somos</a></li>
                        <li><a href="promociones.html">Promociones</a></li>
                        <li><a href="contacto.html">Contáctanos</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>¿Necesitas ayuda?</h4>
                    <ul>
                        <li><a href="http://www.femsa.com/es/">FEMSA</a></li>
                        <li><a href="https://www.oxxo.pe/faqs">Preguntas frecuentes</a></li>
                        <li><a href="https://www.oxxo.pe/aviso-de-privacidad">Política de privacidad</a></li>
                        <li><a href="https://www.oxxo.pe/terminos-y-condiciones">Términos y condiciones</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>¡Síguenos en nuestras redes sociales!</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/OXXOperu/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/OXXOperu/?hl=es-la"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/Tiendas_OXXO"><i class="fab fa-twitter"></i></a>
                        <img src="res/logo/oxxo-asi-de-facil.png" alt="oxxo-asi-de-facil" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="/src/main/webapp/recursos/js/main.js"></script>
</body>
</html>