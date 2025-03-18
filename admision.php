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

        #admision p {
            text-align: center;
            padding-top: 2rem;

        }

        #admision a {
            font-size: 2rem;
            text-decoration: none;
            color: var(--color4);
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            width: 100%;
            overflow-x: auto;
            margin: auto;
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
                        <h2 style="color:var(--color1);">ADMISIÓN</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <section id="admision">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <!-- <div class="col-lg-5 pt-5">
                    <div class="d-flex justify-content-center">
                        <img src="./public/img/icons/descarga.png" width="30%" alt="">
                    </div>
                    <div>
                        <p><a href="#" target="_blank">Descargar Guía</a></p>
                    </div>
                </div>
                <div class="col-lg-5 pt-5">
                    <div class="d-flex justify-content-center">
                        <img src="./public/img/icons/online.png" width="30%" alt="">
                    </div>
                    <div>
                        <p><a href="#" target="_blank">Entrar a <br> Admisión en línea</a></p>
                    </div>
                </div> -->
                <div class="col-lg-10">
                    <div>
                        <div style="text-align: center;"><strong>CENTRO EDUCATIVO PARTICULAR JACQUES COUSTEAU</strong></div>
                        <div><strong>PROCESO DE MAT&Iacute;CULA 2025</strong></div>
                        <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                        <div>En el colegio Jacques Cousteau nos caracterizamos por nunca dejar de innovar.&nbsp;</div>
                        <div>Por eso renovamos nuestro compromiso para seguir ofreciendo experiencias significativas de aprendizajes a nuestros alumnos.</div>
                        <div>&nbsp;</div>
                        <div><strong>REQUISITOS:</strong></div>
                        <ul>
                            <li>Certificado de Estudios.</li>
                            <li>Ficha de Matr&iacute;cula con el c&oacute;digo del educando y del colegio.</li>
                            <li>Boleta de Notas.&nbsp;</li>
                            <li>&nbsp;Certificado no adeudo.&nbsp;</li>
                            <li>Constancia de fecha de pagos.</li>
                            <li>Copia de D.N.I del alumno. &nbsp;</li>
                            <li>Copia del D.N.I de los padres.</li>
                        </ul>
                        <div><strong>PAGOS:</strong></div>
                        <div>&nbsp;</div>
                        <div>
                            <table style="border-collapse: collapse; width: 55.5818%; height: 48px; border-color: #000000;" border="1">
                                <tbody>
                                    <tr style="background-color: #004fae; height: 24px; border-color: #000000;">
                                        <td style="width: 29.669%; height: 24px; border-color: #000000; text-align: center;"><span style="color: #ffffff;">NIVEL</span></td>
                                        <td style="width: 32.8375%; text-align: center; height: 24px;"><span style="color: #ffffff;">MATR&Iacute;CULA</span></td>
                                        <td style="width: 37.4463%; height: 24px; text-align: center;"><span style="color: #ffffff;">PENSI&Oacute;N</span></td>
                                    </tr>
                                    <tr style="height: 24px;">
                                        <td style="width: 29.669%; text-align: center; height: 24px;">PRIMARIA - SECUNDARIA</td>
                                        <td style="width: 32.8375%; text-align: center; height: 24px;">S/330.00</td>
                                        <td style="width: 37.4463%; text-align: center; height: 24px;">S/470.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>&nbsp;</div>
                        <div>
                            <div><strong>DEP&Oacute;SITOS:</strong></div>
                            <div>&nbsp;</div>
                            <ul>
                                <li>BANCO DE CR&Eacute;DITO CTA. &nbsp;N&ordm;: 193-1081531-0-54&nbsp;</li>
                            </ul>
                            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (SOCIEDAD ECOLOGISTA JACQUES COUSTEAU)</div>
                            <ul>
                                <li>BANCO DE CR&Eacute;DITO C&Oacute;DIGO INTERBANCARIO (CCI) N&ordm;: 002-193-001081531054-14&nbsp;</li>
                            </ul>
                            <div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(SOCIEDAD ECOLOGISTA JACQUES COUSTEAU)</div>
                            <div>&nbsp;</div>
                            <div><em><strong>Pasado los 7 d&iacute;as no hay opci&oacute;n a devoluci&oacute;n de dinero.</strong></em></div>
                            <div>&nbsp;</div>
                            <div>Tel&eacute;fonos: 348-1695 / 948886928</div>
                            <div>E-mail: colegiocousteau2017@gmail.com</div>
                            <div>&nbsp;</div>
                            <div><strong>NOTA: Toda la documentaci&oacute;n deber&aacute; estar en una mica A4.</strong></div>
                        </div>
                    </div>
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