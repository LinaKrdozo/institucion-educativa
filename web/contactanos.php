<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Academia Diseño y arte</title>
    <link rel="shortcut icon" href="img\logoPequeño.png" type="image/x-icon">
    <link rel="stylesheet" href="contactanos/estilosContactenos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

  </head>
  <body>
    <header>
        <div class="logo">
          <a href="index.php" id="logo">
            <img src="img\logoSinFondo.png" alt="">
          </a>
        </div>
        <nav>
          <a href="index.php">Conocenos</a>
          <a href="cursos.php">Cursos</a>
          <a href="admisiones.php">Admisiones</a>
          <a href="contactanos.php">Contactenos</a>
        </nav>
      <section class="textos-header">
        <h1>Contactanos</h1>
        <h2>"No hay diseño sin disciplina. No hay disciplina sin inteligencia."<br>Massimo Vignelli</h2>
      </section>

    </header>

    <main>
      <section class="contacto">
        <div class="contenido">
          <h2>crea el futuro que imaginas, diseña espacios, aplica tecnicas, rompe esquemas, ve mas alla, la educación es el camino.</h2>
          <p>Por favor completa el formulario</p>
        </div>
        <div class="contenedor-contacto-info">
          <div class="contactInfo">
            <div class="box">
              <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Dirección</h3>
                <p>avenida Americas #123,<br>Bogotá, Cundimanarca,<br>111111</p>
              </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Telefono</h3>
                <p>(57) 123456</p>
              </div>
            </div>
            <div class="box">
              <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Email</h3>
                <p>info@AcademiaArteYdiseño.com</p>
              </div>
            </div>
          </div>

          <div class="contactForm">
            <form>
              <p>
                <label for="nombre" class="escribirNombre">Nombre
                  <span class = "obligatorio">*</span>
                </label>
                  <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre" autocomplete="on" >
              </p>
              <p>
                <label for="email" class="colocar_email">Email
                  <span class="obligatorio">*</span>
                </label>
                  <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email" autocomplete="on">
              </p>
              <p>
                <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                </label>
                    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto" autocomplete="on">
              </p>
              <p>
                  <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                  </label>
                  <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..." autocomplete="on"></textarea>
              </p>
              <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
              <p class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
              </p>
              </form>
        </div>
      </section>
      <section class="mapa">
        <div class="contenedor-mapa">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.5438241155507!2d-74.05171198541854!3d4.675096496604136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a921a9166bf%3A0x1c29279b4c345958!2sParque%2093!5e0!3m2!1ses!2sco!4v1620352012932!5m2!1ses!2sco" width="900" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </section>  
    </main>
    <footer>
      <div class="footer-container">
      <div class="footer-main">
        <div class="logo">
          <a href="index.php" id="logo">
            <img src="img\logoSinFondo.png" alt="">
          </a>
        </div>
        <div class="footer-columna">
          <h3>Nuestra Academia</h3>
          <nav>
            <a href="index.php"><p>Conocenos</p></a>
            <a href="cursos.php"><p>Cursos</p></a>
            <a href="admisiones.php"><p>Admisiones</p></a>
            <a href="contactanos.php"><p>Contactanos</p></a>
          </nav>
        </div>
        <div class="footer-columna">
          <h3>Contactanos</h3>
          <span class="fa fa-map-marker"><p>123 Av. ABC </p></span>
          <span class="fa fa-phone"><p>(+57) 12 345678</p></span>
          <span class="fa fa-envelope"><p>info@AcademiaArteYdiseño.com</p></span>
        </div>

      </div>
    </div>

    <div class="footer-copy-redes">
      <div class="main-copy-redes">
        <div class="footer-copy">
          &copy; AcademiaArteYdiseño.edu.co - Todos los derechos reservados
        </div>
        <div class="footer-redes">
          <a href="https://www.facebook.com/" target="_blank"  class="fa fa-facebook"></a>
          <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube-play"></a>
          <a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin"></a>
        </div>
      </div>
    </div>
    </footer>
    <script src="https://kit.fontawesome.com/8b67f1904a.js" crossorigin="anonymous"></script>
  </body>
</html>
