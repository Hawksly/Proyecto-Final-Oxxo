<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiénes Somos</title>
  <link rel="stylesheet" href="/src/main/webapp/recursos/css/ingreso.css">
  <link rel="stylesheet" href="/src/main/webapp/recursos/css/about.css">
  <link rel="stylesheet" href="/src/main/webapp/recursos/css/owl.css">
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
        <li><a href="/src/main/webapp/inicio.html">Inicio</a></li>
        <li><a href="/src/main/webapp/about.html">Quiénes Somos</a></li>
        <li><a href="/src/main/webapp/promociones.html">Promociones</a></li>
        <li><a href="/src/main/webapp/contacto.html">Contáctanos</a></li>
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
      <img src="res/logo/oxxo.jpg" class="rounded" alt="Logo" style="width:100%;" />
    </center>
  </div>

  <section class="get-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="res/banner/oxxo.png" class="rounded" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Leer más <em>Historia</em></h4>
            <p>Con nuestra apertura de la primera tienda en Perú en 2018 nos esforzaremos en ser parte del
              estilo de vida de muchas personas, ya que en EXXO nos preocupamos por brindar una amplia
              oferta de productos y servicios que les sean útiles y prácticos para su vida diaria.

              Somos la primer cadena de tiendas de formato pequeño que a lo largo de 40 años de
              experiencia, ha logrado satisfacer las necesidades cotidianas de nuestros clientes, con
              establecimientos en México, Colombia, Chile y Perú</p>
            <p>Formamos parte de FEMSA, empresa creada por mexicanos, cuyo origen se remonta a 1890. FEMSA
              es una empresa líder que participa en la industria de bebidas operando Coca-Cola FEMSA, el
              embotellador público más grande de productos Coca-Cola en el mundo; y en el sector cervecero
              como el segundo accionista más importante de Heineken, una de las cerveceras líderes en el
              mundo con presencia en más de 70 países.</p>
            <p>En comercio al detalle participa con FEMSA Comercio, operando diferentes cadenas de formato
              pequeño, destacando EXXO como la más grande y de mayor crecimiento en el continente
              Americano. Adicionalmente, a través de FEMSA Negocios Estratégicos, ofrece servicios de
              logística, soluciones de refrigeración en el punto de venta y soluciones en plásticos a las
              empresas FEMSA y a clientes externos.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-item">
                <div class="icon">
                  <img src="res/icono/service-icon-01.png" alt="">
                </div>
                <h4>Vision</h4>
                <p>Continuar siendo la tienda de proximidad con mayor número de establecimientos en América Latina.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-item">
                <div class="icon">
                  <img src="res/icono/service-icon-02.png" alt="">
                </div>
                <h4>Mision</h4>
                <p>Satisfacer en todo momento y con pasión las necesidades cotidianas del consumidor, simplificándole su
                  vida, para que disfrute más su día.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="valores">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h4>Nuestros <em>Valores Centrales</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <h4>Integridad</h4>
            </div>
            <div class="item">
              <h4>Respeto a las personas</h4>
            </div>
            <div class="item">
              <h4>Sencillez</h4>
            </div>
            <div class="item">
              <h4>Trabajo en equipo</h4>
            </div>
            <div class="item">
              <h4>Sobriedad</h4>
            </div>
            <div class="item">
              <h4>Pasión por el servicio</h4>
            </div>
            <div class="item">
              <h4>Renovacion</h4>
            </div>
            <div class="item">
              <h4>Orientacion al oficio</h4>
            </div>
            <div class="item">
              <h4>Liderazgo</h4>
            </div>
          </div>
        </div>
      </div>
    </div>



  </section>

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
  <script src="/src/main/webapp/recursos/js/isotope.min.js"></script>
  <script src="/src/main/webapp/recursos/js/owl-carousel.js"></script>
  <script src="/src/main/webapp/recursos/js/custom.js"></script>

</body>

</html>