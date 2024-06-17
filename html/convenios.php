<?php
include_once ('head.php');
include_once ('header.php')
    ?>

<body>

    <main>

        <section class="banner__container">
            <section class="texto__banner">
                <a href="">Inicio > convenios</a>
                <h1>Convenios</h1>
            </section>
        </section>

        <section class="convenios__container h-auto p-3">

            <section class="convenios__info">
                <p><span class="text-primary">En Nordvital IPS</span>, <span class="text-muted">nos enorgullece ofrecer
                        una
                        amplica gama de servicios médicos de alta calidad a nuestros pacientes. Para garantizar un
                        acceso integral a
                        la atención médica, hemos establecido convenios con varias Entidades promotoras de salud (EPS)
                        lideres en el
                        país.</span>
                </p>
                <br>
                <p class="text-muted">Nuestros convenios con EPS nos permiten brindar atención médica especializada a
                    los
                    afiliados de estas entidades, garantizando un proceso de atención eficiente y sin contratiempos.
                    Trabajamos en
                    estrecha colaboración con nuestras EPS asociadas para ofrecer servicios médicos de primera calidad.
                </p>
            </section>

            <!-- Acordion convenios -->
            <div class="container mt-5 acordeon__container ">
                <div class="row acordeon__row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 ">
                        <div class="accordion" id="acordion-ejemplo">

                            <div class="accordion-item-1 ">
                                <h2 class="accordion-header">
                                    <button class="accordion-button acordeon__btn " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        <img src="/Pagina-nordvitalips/images/Convenios/LOGO-COMPENSAR.png" alt="">
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse ">
                                    <div class="accordion-body acordeon__body">

                                        <h5 class="text-center text-primary">Linea de atención:</h5>
                                        <p class="text-center text-muted">607-5880120
                                            <br>
                                            607-5880130
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 ">
                        <div class="accordion" id="acordion-ejemplo">

                            <div class="accordion-item-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed acordeon__btn" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        <img src="/Pagina-nordvitalips/images/Convenios/LOGO-NUEVA-EPS.png" alt="">
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body acordeon__body dos">
                                        <h5 class="text-center text-primary">Linea de atención fija:</h5>
                                        <p class="text-center text-muted">300-9135168</p>
                                        <br>
                                        <h5 class="text-center text-primary">Linea de atención Whatsapp</h5>
                                        <p class="text-center text-muted">317-5141175</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 ">
                        <div class="accordion" id="acordion-ejemplo">

                            <div class="accordion-item-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed acordeon__btn" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        <img src="/Pagina-nordvitalips/images/Convenios/LOGO-SANITAS.png" alt="">
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body acordeon__body">

                                        <h5 class="text-center text-primary">Linea de atención:</h5>
                                        <p class="text-center text-muted">322-8307749
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>




        <section>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://api.whatsapp.com/send?phone=573174309873&text=Hola sean bienvenidos a Nordvital ips, una ips comprometida con sus usuarios."
                class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>

        </section>

    </main>


</body>

<?php
include_once ('footer.php');
include_once ('chat-nordvital.php');
include_once ('notificacion.php');
?>