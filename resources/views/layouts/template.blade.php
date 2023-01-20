<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tecno Vz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">      
    <div class="container d-flex align-items-center justify-content-between">

      <a href="#hero" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Tecno Vz<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Inicio</a></li>
          <li><a href="#menu">Productos</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Disfruta de la mejor <br>Tecnologia y mas...</h2>
          <p data-aos="fade-up" data-aos-delay="100">Todo lo que estas buscando y necesitas esta aca. <br> Si no lo tenemos consultanos y lo conseguimos.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#contact" class="btn-book-a-table">Has tu pedido</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/tecno-fondo.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>

  <main id="main">
        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
            
              <p>Consulta nuestro <span>Catalogo</span></p>
            </div>
    
            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
    
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-todosproductos">
                  <h4>Todos</h4>
                </a>
              </li><!-- End tab nav item -->
    {{-- 
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-caregorias">
                  <h4>Categorias</h4>
                </a>
                </li><!-- End tab nav item --> --}}
            </ul>

            <!-- Productos -->
            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
              
              <div class="tab-pane fade active show" id="menu-todosproductos">
    
                <div class="tab-header text-center">
                  {{-- <p>Productos</p> --}}
                  <h3>Todos los Productos</h3>
                </div>
    
                <div class="row gy-5">
                  
                    @yield('content')
                    
                </div><!-- fin Productos -->
              </div>
            </div>
          </div>
        </section><!-- End Menu Section -->

    <!-- ======= Contacto  ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contacto</h2>
          <p>¿Necesitas ayuda?<span> Contáctenos</span></p>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico" required>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Cargando</div>
            <div class="error-message"></div>
            <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->
  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Direccion</h4>
            <p>
              Calle S/N <br>
              Cordoba, Argentina<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contactanos</h4>
            <p>
              <strong>Telefono:</strong> +54 351 1234 567<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horarios</h4>
            <p>
              <strong>Lunes-Viernes:9AM</strong> - 20PM<br>
              Domingos: Cerrado
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Seguinos</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Daniel Vazquez</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
