<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" href="/src/main/webapp/recursos/css/ingreso.css">
    <link rel="stylesheet" href="/src/main/webapp/recursos/css/style.css">
    <link rel="stylesheet" href="/src/main/webapp/recursos/css/spinner.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="icon" href="/src/main/webapp/recursos/res/logo/oxxo-asi-de-facil.png">
    <script src="/src/main/webapp/recursos/js/jq/jquery-3.6.1.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <script type="text/javascript">
        emailjs.init('kVxTtg0RNxuqxcKl6')
    </script>
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
                    <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#modal">
                        <i class="fas fa-shopping-cart" id="carritoContenedor">0</i>
                    </a>
                    <a class="text-white" href="promociones.html">Volver</a>
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

    <button id="activarFuncion" class="btn btn-secondary boton mt-2 dess">¡Click!</button>

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
                    <form id="procesar-pago" method="POST">
                        <div class="form-group row">
                            <label for="cliente" class="col-12 col-md-2 col-form-label h2">Cliente :</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="persona"
                                    placeholder="Ingresa nombre cliente" name="persona">
                            </div>

                            </br>
							</br>

                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-12 col-md-2 col-form-label h2">Correo :</label>
                            <div class="col-12 col-md-10">
                                <input type="text" id="correo" class="form-control" name="email" id="email">
                            </div>
                        </div>
						</br>
                        <div id="carrito" class="form-group table-responsive">
                            <table class="table" id="lista-compra">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Sub Total</th>
                                    </tr>

                                </thead>
                                <tbody>

                                </tbody>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">TOTAL
                                        <p id="totalProceso"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>

                            </table>
                        </div>

                        <div class="d-none" id="spinner">
                            <div class="spinner">
                                <div class="dot1"></div>
                                <div class="dot2"></div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-2">
                                <a href="promociones.html" class="btn btn-info btn-block">Seguir comprando</a>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <input type="submit" class="btn btn-success btn-block" id="button"
                                    value="Finalizar compra">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </main>

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
    <script src="/src/main/webapp/recursos/js/bootstrap.bundle.min.js"></script>
    <script src="/src/main/webapp/recursos/js/app.js"></script>
	<script src="/src/main/webapp/recursos/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>