<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promociones</title>
    <link rel="stylesheet" href="/src/main/webapp/recursos/css/ingreso.css">
    <link rel="stylesheet" href="/src/main/webapp/recursos/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
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
              <li><a href="/src/main/webapp/inicio.html">Inicio</a></li>
              <li><a href="/src/main/webapp/about.html">Quiénes Somos</a></li>
              <li><a href="/src/main/webapp/promociones.html">Promociones</a></li>
              <li><a href="/src/main/webapp/contacto.html">Contáctanos</a></li>
            </ul>
        </nav>

        <nav>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a
                  class="nav-link text-white"
                  data-bs-toggle="modal"
                  data-bs-target="#modal"
                >
                  <i class="fas fa-shopping-cart" id="carritoContenedor">0</i>
                </a>
              </li>
            </ul>
        </nav>

        <a href="login.html" class="boton"><button>Login</button></a>

        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

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

	<div class="photo">
            <center>
                <img src="res/logo/PROMOCI.png" class="rounded" alt="Logo" style="width:100%;"/>
            </center>
        </div>     
        </br>
        </br> 

        <main>
            <div class="row mt-5" id="contenedor"></div>
          </main>
          
        </br>
  
          <div class="container-xl">
            <div class="modal" tabindex="-1" role="dialog" id="modal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Carrito</h5>
                    <button style="padding: 5px 6px"
                      type="button"
                      class="close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="vaciarCarrito">
                      Vaciar carrito
                    </button>
                    <button type="button" id="procesarCompra" class="btn btn-dark">
                      Continuar compra
                    </button>
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Cerrar
                    </button>
      
                    <span>Precio total:</span>
                    <p class="text-center" id="precioTotal"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
    <script src="/src/main/webapp/recursos/js/bootstrap.bundle.min.js"></script>
    <script src="/src/main/webapp/recursos/js/app.js"></script>
	<script src="/src/main/webapp/recursos/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>