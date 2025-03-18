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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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

        #historia p {
            text-align: justify;
            line-height: 2.5rem;
        }

        #historia .p-interno {
            color: white;
        }

        @media screen and (max-width: 700px) {
            #historia p {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
    </style>

    <?php include_once './partials/header2.php'; ?>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="pt-5">
                    <div style="text-align:center;">
                        <h2 style="color:var(--color1);">NUESTRA HISTORIA</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section id="historia">
        <div class="container">
            <div class="row d-flex justify-content-center" >
                <div class="col-lg-6" >
                    <p>La historia de la Institución Educativa Particular “Jacques Cousteau” empieza con la concepción de la idea de la creación de
                        un colegio que brindara servicios de calidad, pero con pensiones económicas, sobre la base de la gran experiencia y vastos conocimientos en el
                        campo de la educación y de la administración educativa de sus promotores: el señor Ismael Ortiz de Zevallos Villafuerte y la señora Julia Triveño de Tarazona.
                    </p>
                    <p>
                        El señor Ortiz de Zevallos (q. e. p. d.), cusqueño, titulado como profesor, abogado, creador y director de diversas instituciones educativas,
                        exasesor del Ministro de Educación, en sociedad con la señora Julia Triveño, abanquina, profesora, administradora de empresas, con estudios de postgrado,
                        docente y directiva de diversas entidades educativas, crearon el Colegio Jacques Cousteau.
                    </p>


                </div>
                <div class="col-lg-5 mx-4 my-auto">
                    <img src="./public/img/web/imagen2-historia.jpg" width="100%">

                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <div class="col-lg-5 mx-4 my-auto">
                    <img src="./public/img/web/imagen1-historia.png" width="100%">

                </div>
                <div class="col-lg-6">
                    <p>La primera acción concreta fue la adquisición de un terreno, el 28 de diciembre de 1998, ubicado en la Avenida Separadora
                        Industrial Mz F lote 29 del distrito de La Molina (cerca de la esquina con la avenida Huarochirí).</p>
                    <p>El local fue construido con altos márgenes de seguridad, pues las zapatas, las columnas y las vigas de fierro se prepararon
                        exprofesamente con mucho más material que lo que indicaban los planos aprobados y las normas técnicas para construcciones
                        de este tipo. Adicionalmente, el sótano es un verdadero búnker pues sus cuatro paredes y el techo tienen un enrejado de fierro.</p>
                </div>
            </div>
            <br>
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <div class="col-lg-12">
                    <p>El colegio es promovido por la entidad denominada Sociedad Ecologista “Jacques Cousteau”,
                        la misma que se constituyó oficialmente el 22 de enero de 1999, teniendo como socios a don Ismael y
                        a doña Julia quienes, conjuntamente con la Sra. Magda Triveño de Ortiz de Zevallos, Margarita Montañez
                        Vidal de Ortiz de Zevallos y Mario Guillermo Tarazona Gonzales, conformaron el primer Directorio de la empresa. </p>
                    <p>El nombre Jacques Cousteau obedece a las virtudes del insigne sabio e investigador francés,
                        fallecido a fines del siglo pasado, reconocido por su labor en favor de la ecología y su carácter emprendedor.
                        Por su parte, el Colegio designó como su patrón espiritual a San Francisco de Asís por sus cualidades y por su legado ecologista. </p>
                </div>
            </div>
            <br>
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center my-auto">
                    <img src="./public/img/web/imagen3-historia.jpg" width="80%" alt="">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <div class="col-lg-6 my-auto">
                    <p>Es el 14 de abril de 1999 la fecha en que se firmó la Resolución Directoral N° 0700 – USE,
                        mediante la que se resolvió: “Registrar la autorización del Centro Educativo “Jacques Cousteau” para el
                        funcionamiento de los tres niveles: Inicial, Primaria y Secundaria. Así, en 1999, se llevó a cabo el primer año de funcionamiento del Colegio.
                    </p>
                    <p>Parte de la plana docente de los primeros años ya conocía al Director, quienes al enterarse de la creación del Colegio no tuvieron duda en colaborar con él en este nuevo proyecto.</p>
                    <p>La alegría, concepto comprendido en la misión institucional, es siempre un reto cotidiano:</p>
                </div>
                <div class="col-lg-5 mx-4 my-auto">
                    <img src="./public/img/web/imagen5-historia.jpg" width="100%">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <div class="col-lg-5 mx-4">
                    <img src="./public/img/web/imagen7-historia.jpg" width="100%">
                </div>
                <div class="col-lg-5 mx-4">
                    <img src="./public/img/web/imagen8-historia.jpg" width="100%">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row d-flex justify-content-center" data-aos="fade-up">
                <div class="col-lg-12">
                    <p>Progresivamente, el Colegio Jacques Cousteau se ha ido implementando con equipamiento educativo y desarrollándose en el
                        campo académico. Su currículo se diferencia de la mayoría de colegios dado que, además de comprender las competencias que
                        prescriben los planes oficiales establecidos por el Ministerio de Educación, se emplea horas de libre disponibilidad para que los alumnos,
                        en secundaria lleven los cursos de Química y Física y, también, los cursos de Botánica, Zoología, Anatomía y Biología con lo cual se les
                        facilita el ingreso a las universidades en la especialidad de medicina y otras carreras. </p>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
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
    <script>
        AOS.init();
    </script>

</body>



</html>