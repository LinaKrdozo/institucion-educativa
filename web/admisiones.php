<!DOCTYPE html>
<html lang="es" dir="ltr"> 
  <head>
    <meta charset="utf-8">
    <title>Academia Diseño y  arte</title>
    <link rel="shortcut icon" href="img\logoPequeño.png" type="image/x-icon">
    <link rel="stylesheet" href="Admisiones/estilosAdmisiones.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

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
        <h1>Admisiones</h1>
        <h2>"La curiosidad sobre la vida en todos sus aspectos, continúa siendo <br>el secreto de las personas más creativas". <br>Leo Burnett</h2>
      </section>

    </header>

    <main>
      <!--proceso de admision-->
      <section class="Admisiones">
      <div class="info-container">
        <h1 class="titulo">Proceso de Admisión<hr></h1>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="Admisiones/img/paso1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Paso 1</h5>
                <p class="card-text">El primer paso es llenar el formulario de registro</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="Admisiones/img/paso2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Paso 2</h5>
                <p class="card-text">Realiza tu pago</p>
                <a href="https://www.pse.com.co/persona" class="botonPago">Paga Aqui</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="Admisiones/img/paso3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Paso 3</h5>
                <p class="card-text">Elige el curso de tu preferencia</p>
              </div>
            </div>
        </section> 

        <!--formulario-->
        <section class="contendorFormulario">
         <div class="info-container">
          <h1 class="titulo">Formulario de registro<hr></h1>
          <hr>
          <section class="formularioRegistro">
            <div class="imagenRegistro">
              <img src="Admisiones/img/registro1.svg">
            </div>
      
            <form  action="" class="formulario" id="formulario">
              <!-- grupo nombre  -->
              <!-- el id me va a permitir identificarlo con javascript -->
              <!-- Grupo: Nombre -->
              <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">Nombre</label>
                <div class="formulario__grupo-input">
                  <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Escribe tu nombre">
                  <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Nombre solo puede contener letras.</p>
              </div>
      
               <!-- grupo apellido  -->
               <!-- el id me va a permitir identificarlo con javascript -->
                <div class="formulario__grupo" id="grupo__apellido">
                  <label for="apellido" class="formulario__label">Apellido</label>
                  <div class="formulario__grupo-input">
                    <!-- la clase de input va a ser la misma en todas la etiquetas input -->
                    <input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Escribe tu apellido">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                  </div>
                  <!-- este es el error que voy a mostrar en dado caso que el usuario digite mal -->
                  <p class="formulario__input-error">El apellido solo puede contener letras. </p>
                </div>
      
                <!-- grupo contraseña  -->
                <!-- el id me va a permitir identificarlo con javascript -->
                 <div class="formulario__grupo" id="grupo__password">
                   <label for="password" class="formulario__label">Contraseña</label>
                   <div class="formulario__grupo-input">
                     <!-- la clase de input va a ser la misma en todas la etiquetas input -->
                     <!-- el input seria de tipo password para que lo que me muestre sea oculto -->
                     <input type="password" class="formulario__input" name="password" id="password" >
                     <i class="formulario__validacion-estado fas fa-times-circle"></i>
                   </div>
                   <!-- este es el error que voy a mostrar en dado caso que el usuario digite mal -->
                   <p class="formulario__input-error">la contraseña tiene que ser de 4 a 12 digitos.</p>
                 </div>
      
                 <!-- grupo contraseña 2: verificacion de la contraseña 1  -->
                 <!-- el id me va a permitir identificarlo con javascript -->
                  <div class="formulario__grupo" id="grupo__password2">
                    <label for="password2" class="formulario__label">Repetir contraseña</label>
                    <div class="formulario__grupo-input">
                      <!-- la clase de input va a ser la misma en todas la etiquetas input -->
                      <!-- el input seria de tipo password para que lo que me muestre sea oculto -->
                      <input type="password" class="formulario__input" name="password2" id="password2" >
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <!-- este es el error que voy a mostrar en dado caso que el usuario digite mal -->
                    <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                  </div>
      
                  <!-- grupo correo Electronico  -->
                  <!-- el id me va a permitir identificarlo con javascript -->
                   <div class="formulario__grupo" id="grupo__correo">
                     <label for="correo" class="formulario__label">Correo Electronico</label>
                     <div class="formulario__grupo-input">
                       <!-- la clase de input va a ser la misma en todas la etiquetas input -->
                       <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
                       <i class="formulario__validacion-estado fas fa-times-circle"></i>
                     </div>
                     <!-- este es el error que voy a mostrar en dado caso que el usuario digite mal -->
                     <p class="formulario__input-error">El correo electronico solo puede contener numeros, letras, puntos, guiones y guion bajo </p>
                   </div>
      
                   <!-- grupo Telefono  -->
                   <!-- el id me va a permitir identificarlo con javascript -->
                   <!-- Grupo: Teléfono -->
                   <div class="formulario__grupo" id="grupo__telefono">
                     <label for="telefono" class="formulario__label">Teléfono</label>
                     <div class="formulario__grupo-input">
                       <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="1234567">
                       <i class="formulario__validacion-estado fas fa-times-circle"></i>
                     </div>
                     <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
                   </div>
      
                    <!--grupo para terminos y condiciones  -->
                    <div class="formulario__grupo" id="grupo__terminos">
                          <label class="formulario__label-terminos">
                            <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                             Acepto los Terminos y Condiciones
                          </label>
                    </div>
                    <!-- mensaje cuando el usuario no diligencia los campos -->
                    <div class="formulario__mensaje" id="formulario__mensaje">
                      <p><i class="fas fa-exclamation-triangle"></i><b>Error:</b> por favor llena el formulario correctamente </p>
                    </div>
      
                    <!-- para agregar el boton de enviar este grupo tiene dos clases de tal forma que se diferencia de las emas clases -->
                    <!--con la primera clase le vamos a dar los estilos a todos los grupos pero con la segunda le vamos a dar los estilos al boton  -->
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                      <button type="submit" class="formulario__btn">Enviar</button>
                      <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">El formulario se envio exitosamente</p>
                    </div>
             </form>
          </section>
       </div>
      </section>
        
        <section class="contenedorRequisitos">
          <section class="requisitos">
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Realiza tu pago</h5>
                    <ul class="card-text">
                      <li>Puedes pagar tu matrícula e inscripción(si eres estudiante nuevo)desde la comodidad de tu casa a través del boton de pago por internet .</li>
                      <li>Si vives en Colombia y estás interesado en hacer el pago en efectivo puedes hacer una consignación en la cuenta corriente del Banco xxxxxx No. 123456, convenio 11, a nombre de la Academia arte y diseño.</li>
                      <li>Para realizar pagos con: cheque al día, personal o de gerencia, debes acercarte directamente al Departamento de Admisiones.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Requisitos de admisión</h5>
                    <ul class="card-text">
                      <li>Gestionar proceso de inscripción y matrícula</li>
                      <li>Fotocopia documento de identidad</li>
                      <li>Una foto 3×4 color</li>
                      <li>Entrevista personal</li>
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>
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
    <script src="js\formularioRegistro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </body>
</html>
