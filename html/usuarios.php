<?php
include_once ('head.php');
include_once ('header.php');
// include ('/xampp/htdocs/Pagina-nordvitalips/php/sentEmail.php');

?>

<body>
  <main>

    <section class="banner__container">
      <section class="texto__banner">
        <a href="">Inicio > PQRSFD</a>
        <h1>PQRSFD</h1>
      </section>
    </section>

    <div class="quienes__somos mt-5">

      <div class="quienes__somos__item-uno p-5 m-5 usuario__info-pqrsf">

        <h1 class="text-primary"><strong>PQRSFD</strong></h1><br>
        <p class="text-muted"> Valoramos su opinión y estamos comprometidos en ofrecer el mejor servicio a nuestros
          usuarios. En NordVital IPS, nos esforzamos cada día por mejorar y brindar la atención que usted merece. </p>
        <br>
        <p class="text-muted">Por favor, comparta sus peticiones, quejas, reclamos, sugerencias y felicitaciones con
          nosotros. Su voz es fundamental para ayudarnos a crecer y adaptarnos a sus necesidades.</p>

      </div>

      <div class="quienes__somos__item w-100">
        <img src="/Pagina-nordvitalips/images/usuarios/2147900168.png" alt="">
      </div>

    </div>

    <!--  -->

    <div class="card usuarios__contain h-auto m-auto mt-5   ">
      <div class="card-body">

        <!-- Vertical Pills Tabs -->
        <div class="d-flex align-items-center usuarios__tabs m-auto gap-5">
          <div class="nav flex-column nav-pills me-3 gap-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <button class="nav-link active usuarios__btn rounded-4" id="v-pills-home-tab btn_u" data-bs-toggle="pill"
              data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
              aria-selected="true">Petición</button>

            <button class="nav-link usuarios__btn rounded-4" id="v-pills-profile-tab btn_d" data-bs-toggle="pill"
              data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
              aria-selected="false">Queja</button>

            <button class="nav-link usuarios__btn rounded-4" id="v-pills-messages-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
              aria-selected="false">Reclamo</button>

            <button class="nav-link usuarios__btn rounded-4" id="v-pills-suggestion-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-suggestion" type="button" role="tab" aria-controls="v-pills-suggestion"
              aria-selected="false">Sugerencia</button>

            <button class="nav-link usuarios__btn rounded-4" id="v-pills-congratulations-tab" data-bs-toggle="pill"
              data-bs-target="#v-pills-congratulations" type="button" role="tab" aria-controls="v-pills-congratulations"
              aria-selected="false">Felicitaciones</button>

          </div>
          <div class="tab-content d-flex align-items-center usuarios__contenido " id="v-pills-tabContent">
            <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
              href="#btn_u">

              <!-- Tab #1 -->
              <h4><em>Petición</em></h4>
              <p class="p-1">Una petición es una solicitud que haces en nombre de ti mismo, de otra persona o de un
                grupo. </p><br>

              <p class="p-1">Las personas usan las peticiones para solicitar cosas como derechos, servicios, información
                o documentos. El objetivo es obtener una respuesta oportuna y significativa.</p>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

              <!-- Tab #2 -->
              <h4><em>Queja</em></h4>

              <p href="#btn_d">¿Sabías que una "queja" es un término en español que se refiere a una forma de
                proporcionar retroalimentación acerca del servicio de un trabajador gubernamental? Es una herramienta
                útil que da a todos nuestros usuarios la oportunidad de expresar cualquier inconveniente que hayan
                tenido con respecto a la calidad de nuestro servicio, el trato o el respeto recibido.</p><br>

              <p class="p-1">Con tu ayuda, las autoridades competentes pueden abordar estas preocupaciones y trabajar
                para mejorar sus servicios. Así que, si has tenido una mala experiencia, no dudes en presentar una
                "queja". ¡Tus comentarios podrían ser el catalizador del cambio positivo!</p>

            </div>

            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

              <!-- tab #3 -->
              <h4><em>Reclamo</em></h4>

              <p>Permítame ofrecerle claridad sobre lo que implica un “reclamo”. Es una solicitud o queja formal hecha
                en relación a un servicio que no fue esperado o previamente acordado. </p><br>

              <p class="p-1">Esto puede incluir un servicio no cumplido o una atención inadecuada a una solicitud. Es un
                medio de expresar los propios requisitos y asegurar que se proporcione el servicio al cliente adecuado.
                En caso de experimentar una situación así, le agradecemos que aproveche la oportunidad para hacer valer
                sus derechos sin dudarlo.</p>

            </div>

            <div class="tab-pane fade" id="v-pills-suggestion" role="tabpanel" aria-labelledby="v-pills-suggestion-tab">

              <!-- tab #4 -->
              <h4><em>Sugerencia</em></h4>

              <p>Es una propuesta constructiva presentada con el objetivo de mejorar la calidad de un servicio,
                transacción o proceso. Es una herramienta efectiva que nos permite identificar áreas de mejora y mejorar
                la experiencia general de nuestros usuarios. Por lo tanto, su opinión es muy importante para la
                nosotros. </p><br>

              <p class="p-1">Le animo a compartir sus valiosas sugerencias, para que podamos trabajar juntos hacia
                nuestro objetivo común de brindar un servicio ejemplar a todos nuestros usuarios.</p>

            </div>

            <div class="tab-pane fade" id="v-pills-congratulations" role="tabpanel"
              aria-labelledby="v-pills-congratulations-tab">

              <!-- tab #5 -->
              <h4><em>Felicitaciones</em></h4>

              <p>Las felicitaciones son expresiones de reconocimiento y satisfacción por parte de los usuarios respecto
                a los servicios prestados por NordVital IPS. </p><br>

              <p class="p-1">Pueden destacar la buena atención recibida, el profesionalismo del personal, o cualquier
                aspecto positivo de la experiencia del usuario. Las felicitaciones no solo motivan al equipo, sino que
                también resaltan las buenas prácticas que deben mantenerse.</p>

            </div>
          </div>
        </div>
        <!-- End Vertical Pills Tabs -->

      </div>
    </div>

    <section class="usuarios__info m-auto p-5 text-center">
      <p>Con el fin de facilitar este proceso, <strong>hemos desarrollado un formato</strong> que puede completar para
        brindarnos información detallada sobre su caso. </p><br>
      <p>Agradecemos su colaboración al utilizar esta herramienta para comunicarse con nosotros. Estamos comprometidos a
        resolver cualquier inquietud que tenga y a proporcionarle un servicio de calidad.</p>
    </section>

    <div class="card usuarios__container mt-5 mb-5">
      <div class="card-body mv__uno d-flex align-items-center justify-content-between ">

        <div class="mv__titulo">
          <h3>Nuestro formulario</h3>
        </div>
        <!-- Vertically centered Modal -->
        <div class="mv__icono">
          <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#largeModal">
            <img src="/Pagina-nordvitalips/images/Quienes-somos/Recurso_2.svg" alt="">
          </button>
        </div>
      </div>
      <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content ">

            <div class="modal-header">
              <h5 class="modal-title">Formulario PQRSFD</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body mv__contenido">
              <div class="card usuarios__body">
                <div class="card-body ">  
                  
                  <!-- Formulario PQRSFD  -->
                  
                  <form class="row g-3 needs-validation manejarEnvio" novalidate action="/Pagina-nordvitalips /sentEmail.php" method="post">                  
                    <!-- Custom Styled Validation -->

                    <div class="col-md-6">
                      <label for="validationCustom01" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="validationCustom01" value="" required name="Nombre">
                      <div class="invalid-feedback">
                        Ingrese su nombre
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label for="validationCustom02" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="validationCustom02" name="Apellido" required>
                      <div class="invalid-feedback">
                        Ingrese su apellido
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label for="validationCustom04" class="form-label">Tipo identificación</label>
                      <select class="form-select tipo-identificacion" id="validationCustom04" name="Identificación" required>
                        <option selected disabled value="">Elige</option>
                      </select>
                      <div class="invalid-feedback">
                        Escoge uno de los tipos de identificación
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label for="validationCustom03" class="form-label">Número identificación</label>
                      <input type="text" class="form-control" id="validationCustom03" name="n-identificacion" required>
                      <div class="invalid-feedback">
                        Ingrese su número de identificación
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label for="validationCustom04" class="form-label">Fecha</label>
                      <input type="date" class="form-control" id="validationCustom04" name="fecha" required>
                      <div class="invalid-feedback">
                        Escoge una fecha
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label for="validationCustom01" class="form-label">Número de celular</label>
                      <input type="text" class="form-control" id="validationCustom01" name="numCelular"  required>
                      <div class="invalid-feedback">
                        ingrese su número de celular
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <label for="validationCustom02" class="form-label">Número fijo</label>
                      <input type="text" class="form-control" id="validationCustom02" name="numFijo" required>
                      <div class="invalid-feedback">
                        Ingrese su número de teléfono fijo
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label for="validationCustom04" class="form-label">Departamento</label>
                      <select class="form-select departamento" id="validationCustom04 " name="departamento" required>
                        <option selected disabled value="">Elige</option>
                      </select>
                      <div class="invalid-feedback">
                      Ingrese el departamento donde hace su queja
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label for="validationCustom04" class="form-label">Municipio</label>
                      <select class="form-select municipio" id="validationCustom04 " name="municipio" required>
                        <option selected disabled value="">Elige</option>
                      </select>
                      <div class="invalid-feedback">
                        Ingrese el municipio donde hace su queja.
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <label for="validationCustom03" class="form-label">Correo electronico</label>
                      <input type="email" class="form-control" id="validationCustom03" name="email" required>
                      <div class="invalid-feedback">
                        Ingrese su correo electronico
                      </div>
                    </div>

                    <div class="col-md-6">
                      <label for="validationCustom05" class="form-label">Tipo solicitud</label>
                      <select class="form-select tipo-pqrsfd custom-select-pqrsfd" name="tipo-solicitud" id="validationCustom05" required>
                        <option selected disabled value="">Elige</option>
                      </select>                      
                      <div class="invalid-feedback">
                        Seleccione una de las opciones
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <label for="validationCustom05" class="form-label">Asunto</label>
                      <input type="text" class="form-control" id="validationCustom05" name="asunto" required>
                      <div class="invalid-feedback">
                        Escriba el asunto
                      </div>
                    </div>

                    <div class="w-100 ">
                      <label for="validationCustom05" class="form-label">Escriba su solicitud</label>
                      <textarea type="text" class="form-control" id="validationCustom05" name="solicitud" required></textarea>
                      <div class="invalid-feedback">
                        Escribe la solicitud
                      </div><span></span>
                    </div>
                    <div class="w-100 form__texto text-muted">
                      <p>Al hacer clic en el botón Enviar, usted acepta la remisión de la PQRD a NordVital IPS. Autorizo expresamente a NordVital IPS para que mis datos personales puedan ser utilizados de conformidad con la reglamentación vigente de <a href="">Política de protección de datos personales.</a>
                      </p><br>
                      <p>
                      NordVital IPS se compromete a realizar el seguimiento directo de su PQRSF mediante el correo electrónico proporcionado, garantizando una atención oportuna y personalizada.
                      </p>
                    </div>
                    <div class="w-100">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="terminos" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Acepto los términos y condiciones.
                        </label>
                        <div class="invalid-feedback">
                          Estimado usuario debes aceptar los terminos y condiciones para hacer un envio correcto del formulario.
                        </div>
                    </div>
                      <div class="d-flex justify-content-end">                      
                        <button class="btn btn-primary justify " type="submit" name="enviado" >Enviar</button>
                      </div>
                    </div>
                    
                  </form>
                  <!-- Fin formulario PQRSFD -->

                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div><br></div>

  </main>
  <?php
include_once('footer.php');
include_once ('chat-nordvital.php');
include_once ('notificacion.php');    ?>
</body>