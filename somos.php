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
    <!-- CARROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CARROUSEL -->
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
            text-align: center;
        }
    </style>

    <?php include_once './partials/header2.php'; ?>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="pt-5">
                    <div style="text-align:center;">
                        <h2 style="color:var(--color1);">QUIÉNES SOMOS</h2>
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
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <p>
                        La Institución Educativa Privada “Jacques Cousteau” es una entidad sin fines de lucro, promovida por <b>la Sociedad Ecologista Jacques Cousteau,</b> que ofrece el servicio
                        educativo a menores en los niveles de <b>Educación Primaria y Secundaria.</b>

                    </p>

                </div>
            </div>

        </div>
        <div class="container">
            <br>
            <br>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="pt-5">
                        <div style="text-align:center;">
                            <h2 style="color:var(--color1);">MISIÓN</h2>
                        </div>
                        <div class="separador mx-auto"></div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <p>
                        Somos una institución educativa privada
                        <b>comprometida</b> en formar estudiantes <b>competentes, responsables, alegres.</b>


                    </p>

                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <br>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="pt-5">
                        <div style="text-align:center;">
                            <h2 style="color:var(--color1);">VISIÓN</h2>
                        </div>
                        <div class="separador mx-auto"></div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <p>
                        Nuestra visión para el 2025, es que nuestros egresados, formados en el sistema educativo Custoniano, participen con <b>éxito en el campo académico</b> y están orientados
                        sólidamente para un desempeño laboral con <b>iniciativa, creatividad y efectiva solución de problemas</b> en los ámbitos <b>empresariales y/o como profesionales independientes,</b>
                        destacando por sus principios y valores.</p>
                        <p> Institucionalmente, somos <b>reconocidos</b> como <b>lideres</b> en la promoción de <b>desarrollo cultural en la zona de influencia.</b>
                    </p>

                </div>
            </div>
        </div>
        <div class="container">
            <br>
            <br>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="pt-5">
                        <div style="text-align:center;">
                            <h2 style="color:var(--color1);">VALORES</h2>
                        </div>
                        <div class="separador mx-auto"></div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Responsabilidad.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Puntualidad.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Solidaridad.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Respeto.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Empatía.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Tolerancia.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Honestidad.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Generosidad.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Humildad.</p>
                    <p data-aos="fade-up" style='text-align:center;line-height: 2rem;'>Amor.</p>
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
    <script>
        AOS.init();
    </script>

</body>



</html>