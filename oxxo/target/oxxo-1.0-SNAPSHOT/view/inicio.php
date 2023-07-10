<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxxo</title>
    <link rel="stylesheet" href="/oxxo/css/ingreso.css">
    <link rel="stylesheet" href="/oxxo/css/style.css">
    <link rel="stylesheet" href="/oxxo/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="/oxxo/js/jq/jquery-3.6.1.min.js"></script>
    <link rel="icon" href="/oxxo/res/logo/oxxo-asi-de-facil.png">
</head>
<body>
    <header class="header sticky-top">
        <div class="logo">
            <img src="/proyectooxxo/res/logo/oxxologo.png" class="rounded" alt="Logo de la marca">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="/oxxo/Vista/inicio.php">Inicio</a></li>
                <li><a href="/oxxo/Vista/about.php">Quiénes Somos</a></li>
                <li><a href="/oxxo/Vista/promociones.php">Promociones</a></li>
                <li><a href="/oxxo/contacto.jsp">Contáctanos</a></li>
            </ul>
        </nav>
        <a href="login.html" class="boton"><button>Login</button></a>
        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>
        <div class="overlay" id="mobile-menu">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="/oxxo/Vista/inicio.php">Inicio</a>
                <a href="/oxxo/Vista/about.php">Quiénes Somos</a>
                <a href="/ooxxo/Vista/promociones.php">Promociones</a>
                <a href="/oxxo/contacto.jsp">Contáctanos</a>
            </div>
        </div>
    </header>
    <div id="carouselproducto" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselproducto" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselproducto" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselproducto" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselproducto" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselproducto" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/oxxo/res/carousel/spin.png" class="d-block w-100" alt="spin">
            </div>
            <div class="carousel-item">
                <img src="/oxxo/res/carousel/extra.png" class="d-block w-100" alt="extra">
            </div>
            <div class="carousel-item">
                <img src="/oxxo/res/carousel/silver.png" class="d-block w-100" alt="silver">
            </div>
            <div class="carousel-item">
                <img src="/oxxo/res/carousel/dulce.png" class="d-block w-100" alt="dulce">
            </div>
            <div class="carousel-item">
                <img src="/oxxo/res/carousel/game.png" class="d-block w-100" alt="game">
            </div>
        </div>
        <button class="carousel-control-prev btncarousel" type="button" data-bs-target="#carouselproducto"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon btncarousel" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next btncarousel" type="button" data-bs-target="#carouselproducto"
            data-bs-slide="next">
            <span class="carousel-control-next-icon btncarousel" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!---CUERPO DE OXXO INICIO-->
<section>
    <div class="divcol p-3">
        <div class="row centro p-4">
            <h1 class="blanco sombra"> </h1>
        </div>
    </div>
</section>
<!---BANNER DE 2 IMAGENES-->
<section class="small-features">
    <div class="container">
        <div class="inner-content">
            <div class="row"> <!---Abrir 2da fila--->
				<!---Abrir 1era columna-->
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-2 p-3">
					<div class="" >
						<a href="promociones.html"><img src="/oxxo/res/banner/catalogo.png" class="banner" style="width:100%"></a>
					</div><br>
					<div class="">
						<a href="contacto.html"><img src="/oxxo/res/banner/ubicaciones.png" class="banner" style="width:100%"></a>
					</div><br>
					<div class="">
						<a href="promociones.html"><img src="/oxxo/res/banner/promociones.png" class="banner" style="width:100%"></a>
					</div><br>
					<div class="">
						<a href="about.html"><img src="/oxxo/res/banner/equipo.png" class="banner" style="width:100%"></a>
					</div>
                    <br>PRODUCTOS OXXO <br>
                    <div id="carouselvideos" class="carousel slide mt-0" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/oxxo/res/producto/agua.png">
                            </div>
                            <div class="carousel-item">
                                <img src="/oxxo/res/producto/atun.png">
                            </div>
                            <div class="carousel-item">
                                <img src="/oxxo/res/producto/batimix.png">
                            </div>
                            <div class="carousel-item">
                                <img src="/oxxo/res/producto/energizante.png">
                            </div>
                        </div>
                    </div>
				</div>
				<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 p-3 ">
                     <div class="row">
                        <div class="">
                            <center><h3>OXXO TE ACOMPAÑA EN CADA MOMENTO</h3></center>
                        </div>
                    </div>
                        <div class="row">
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3">
                                <div class="">
                                   <p class="wow fadeInUp" data-wow-delay=".6s">
                                        Pide tus productos a traves de esta tienda OXXO.
                                        100%  digital y disfruta de descuentos exclusivos.
                                </div>
                            </div>
                            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3 ">
                                <div class="button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="https://api.whatsapp.com/send?phone=51950469021&text=Hola%20Tienda%20Oxxo" class="btn btn-wssp">Solicitar via Whatsapp</a>
                                </div>
                            </div>
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3 ">
                                <div class="button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="/oxxo/Vista/promociones.html" class="btn btn-alt">Comprar ahora!</a>
                                </div>
                            </div>
						</div>
						<div class="row ">
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3  ">
                                <div class="single-feature">
                                    <i class="lni lni-pie-chart">
                                    <img src="/oxxo/res/icono/correo.JPG"></i>
                                    <h2>Escríbenos: <span>ventas@oxxo.com​​​​​​​</span></h2>
                                </div>
                            </div>
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3  ">
                                <div class="single-feature">
                                    <i class="lni lni-handshake">
                                        <img src="/oxxo/res/icono/contactanos.JPG"></i>
                                    <h2>Contáctenos: <span>01 601 3636</span></h2>
                                </div>
                            </div>
                            <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 p-3  ">
                                <div class="single-feature">
                                    <i class="lni lni-investment">
                                        <img src="/oxxo/res/icono/ubicacion.JPG"></i>
                                    <h2>Visítenos en:<span>Av. Sol 116 - SJL</span></h2>
                                </div>
                            </div>
						</div>
						<div class="row" >
							<div class="row-1 blanco p-12">
								<div id="carouselvideos" class="carousel slide mt-0" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<iframe width="800" height="615" src="https://www.youtube.com/embed/9YKz0W9W1_4?controls=0"
												title="YouTube video player" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen class="d-block w-100" alt="video1">
											</iframe>
										</div>
										<div class="carousel-item">
											<iframe width="800" height="615" src="https://www.youtube.com/embed/9kBh-TO9Yww?controls=0"
												title="YouTube video player" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen class="d-block w-100" alt="video2">
											</iframe>
										</div>
										<div class="carousel-item">
											<iframe width="800" height="615" src="https://www.youtube.com/embed/FuS5xzBpz9s?controls=0"
												title="YouTube video player" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen class="d-block w-100" alt="video3"></iframe>
										</div>
										<div class="carousel-item">
											<iframe width="800" height="615" src="https://www.youtube.com/embed/FZu2HM2ZRj0?controls=0"
												title="YouTube video player" frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen class="d-block w-100" alt="video4"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
             </div>
			</div>
		</div>
    </SECTION>
        <footer class="footer">
            <div class="contenido">
                <div class="wow">
                    <div class="footer-col">
                        <h4>Mundo</h4>
                        <ul>
                            <li><a href="/oxxo/Vista/inicio.php">Inicio</a></li>
                            <li><a href="/oxxo/Vista/about.php">Quiénes Somos</a></li>
                            <li><a href="/oxxo/Vista/promociones.php">Promociones</a></li>
                            <li><a href="/oxxo/Vista/contacto.php">Contáctanos</a></li>
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
                            <img src="/oxxo/res/logo/oxxo-asi-de-facil.png" alt="oxxo-asi-de-facil" />
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
            <script src="/oxxo/recursos/js/main.js"></script>
</body>
</html>