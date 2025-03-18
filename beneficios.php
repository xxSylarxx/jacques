<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/icons/escudo.png" type="image/x-icon">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link rel="stylesheet" href="./public/css/networks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- CARROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CARROUSEL -->

    <title>Colegio Jacques Cousteau</title>
</head>

<body>

    <style>
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)),
                url('./public/img/web/portada_ajedrez.png');
            background-size: cover;
            background-position: center;
            height: 100%;
            padding: 550px 0 10px;
        }

        #portada .page_title {
            font-size: 50px;
            font-weight: bold;
            color: #fff;
        }

        #portada .breadcrumb-item+.breadcrumb-item::before {
            color: white;
        }

        #portada .breadcrumb-item {
            font-size: 22px;
        }

        #portada .breadcrumb-item a {
            color: #fff;
            font-size: 22px;
        }

        #portada .breadcrumb-item:hover a {
            color: var(--color2);
        }

        #alianzas {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        #alianzas p {
            font-size: 1.3rem;
            text-align: justify;
        }

        #alianzas h3 {
            color: var(--color2);
        }

        .separador {
            background-color: var(--color2);
            height: 4px;
            width: 50px;
            text-align: left !important;
            margin-left: 5rem;
            padding-right: 5rem;
        }

        #beneficios span {
            padding-top: 5px;
            text-align: center;
            display: flex;
            justify-content: center;
            font-weight: bold;
            font-family: "Raleway", sans-serif;
            color: var(--color1);
            font-size: 1.1rem;
        }

        #beneficios img {

            padding-top: 2.8rem;
            transition: transform .6s;

        }

        #beneficios img:hover {
            transform: scale(1.1);
        }

        @media screen and (max-width: 700px) {
            #beneficios img {
                padding-top: 1rem;
                width: 50%;
            }
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

    <!--  <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page_title">ALIANZAS</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Por qué Elegirnos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="pt-5">
                    <div style="text-align:center;">
                        <h2 style="color:var(--color1);">BENEFICIOS</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- <br>
    <div class="container">
        <p style="text-align:center;">Somos conscientes que la elección de un colegio puede resultar una tarea difícil, pero aquí te explicaremos porque elegir Berkeley School, resaltando que una buena educación no tiene por qué ser costosa.</p>
    </div> -->
    <br>
    <section id="beneficios">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/enzenianza.png" width="100%" alt=""></center>
                    <span>Docentes<br>
                        Capacitados.
                    </span>
                </div>
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/form-ciudadana1.png" width="100%" alt=""></center>
                    <span>Sólida formación en <br>valores y ciudadanía.
                    </span>
                </div>
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/plataforma-digital.png" width="100%" alt=""></center>
                    <span>Plataforma<br>virtual.
                    </span>
                </div>
            </div>

            <div class="row d-flex justify-content-around">
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/educ-integral.png" width="100%" alt=""></center>
                    <span>Instrucción<br>educativa integral.
                    </span>
                </div>
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/psicopedagogia.png" width="100%" alt=""></center>
                    <span>Departamento<br> Psicopedagógico.
                    </span>
                </div>
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/tutoria.png" width="100%" alt=""></center>
                    <span>Dpto. de Normas de <br>Convivencia y Tutoría.
                    </span>
                </div>
            </div>

            <div class="row d-flex justify-content-around">
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/laboratorio-quimica.png" width="100%" alt=""></center>
                    <span>Laboratorio de <br>Física y Química.

                    </span>
                </div>
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/laboratorio-computo.png" width="100%" alt=""></center>
                    <span>Laboratorio de<br> Computación.
                    </span>
                </div>
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/aulas-interactivas.png" width="100%" alt=""></center>
                    <span>Aula multimedia y <br>de conferencias.
                    </span>
                </div>
            </div>
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/bilingue.png" width="100%" alt=""></center>
                    <span>Inglés <br>intensivo.</span>
                </div>
                <div class="col-lg-2">
                    <center><img src="./public/img/icons/ballet.png" width="100%" alt=""></center>
                    <span>Educación Artística<br> (Ballet Folclórico Peruano Internacional)
                    </span>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>



    <?php include_once './partials/footer.php'; ?>

    <!-- CARROUSEL -->
    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    </script>

    <script type="text/javascript">
        let modal = new bootstrap.Modal(document.getElementById('myModal'), );
        modal.show();
    </script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/bootstrap.pooper.js"></script>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="./public/js/hubslider.min.js"></script>
    <script>
        $('.hub-slider-slides ul').hubSlider({
            selector: $('li'),
            button: {
                next: $('.hub-slider-arrow_next'),
                prev: $('.hub-slider-arrow_prev')
            },
            transition: '0.9s',
            startOffset: 30,
            auto: true,
            time: 3 // secondly
        });
    </script>

</body>



</html>