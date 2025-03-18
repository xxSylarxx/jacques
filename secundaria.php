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
                url('./public/img/web/web/portada-secundaria.png');
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



        /* Estilo de boton */

        /* CSS */
        .button-51 {
            background-color: #FFB52F;
            border: none;
            box-sizing: border-box;
            color: #00132C;
            font-family: "Avenir Next LT W01 Bold", sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            padding: 16px 23px;
            position: relative;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            color: white;
            transition: transform .8s ease-in-out;
        }

        .button-51:before {
            background-color: transparent;
            border: 2px solid white;
            content: "";
            height: calc(100% + 3px);
            position: absolute;
            right: 10px;
            top: 8px;
            transition: background-color 300ms ease-in;
            width: 80%;
            height: 70%;
            z-index: 99;
        }

        .button-51:hover {
            transform: scale(1.1);
        }

        @media (min-width: 768px) {
            .button-51 {
                padding: 16px 32px;
            }
        }

        /* CSS */
        .button-52 {
            background-color: var(--color1);
            border: none;
            box-sizing: border-box;
            color: #00132C;
            font-family: "Avenir Next LT W01 Bold", sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            padding: 16px 23px;
            position: relative;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            color: white;
            transition: transform .8s ease-in-out;
        }

        .button-52:before {
            background-color: transparent;
            border: 2px solid white;
            content: "";
            height: calc(100% + 3px);
            position: absolute;
            right: 10px;
            top: 8px;
            transition: background-color 300ms ease-in;
            width: 80%;
            height: 70%;
            z-index: 99;
        }

        .button-52:hover {
            transform: scale(1.1);
        }

        @media (min-width: 768px) {
            .button-52 {
                padding: 16px 32px;
            }

            #portada .text-banner {
                color: var(--color3);
                position: absolute;
                top: 35%;
                left: 15%;

            }
        }



        #bienvenidos .separador {
            background-color: var(--color2);
            height: 4px;
            width: 50px;
            text-align: left !important;
            margin-left: 5rem;
            padding-right: 5rem;
        }

        #bienvenidos h2 {
            color: var(--color2);
            padding-left: 5rem;
            padding-right: 5rem;
        }

        #bienvenidos p {
            color: var(--color1);
            text-align: justify;

        }

        #bienvenidos .image-box {

            position: relative;
            text-align: center;
            width: 100%;
            height: 100%;
        }

        #bienvenidos .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        /* @media (max-width: 1400px) {
            #bienvenidos .image-box img {

                height: 450px;
            }
        } */

        /* -- strcoll -- */
        .scroll {
            overflow-y: auto;
            height: 440px;

        }

        .scroll::-webkit-scrollbar {
            background-color: whitesmoke;
            width: 10px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {
            /* background-color: #a7a7a7; */
            background-color: #AFADAD;

        }

        .scroll::-webkit-scrollbar-track {
            width: 5px;

        }

        @media (max-width: 1400px) {
            .scroll {
                overflow-y: auto;
                height: 500px;

            }
        }

        #alianzas {
            /* background-color: var(--color3); */
            padding-bottom: 3rem;
        }

        #alianzas h2 {
            color: var(--color1);
        }

        #alianzas .separador {
            background-color: var(--color2);
            height: 4px;
            width: 50px;

        }

        #alianzas img {
            transition: transform .8s ease-in-out;
        }

        #alianzas img:hover {
            transform: scale(1.1);
        }

        #niveles {
            background-color: var(--color2);
        }

        #niveles .separador {
            background-color: var(--color1);
            height: 4px;
            width: 50px;
        }

        #niveles h2 {
            color: var(--color1);
        }

        /* Botones de Niveles */
        .boton {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition: transform .8s ease-in-out;
        }

        .boton:hover {
            transform: scale(1.1);
            color: white;
            background-color: var(--color2);
        }

        #comunidad h2 {
            color: var(--color3);
        }

        #comunidad .separador2 {
            background-color: var(--color2);
            height: 4px;
            width: 50px;
            text-align: left !important;
            margin-left: 5rem;
            padding-right: 5rem;
        }

        .content-img img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;

        }

        @media screen and (max-width: 700px) {

            #portada {
                padding: 200px 0 10px;
            }
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

    <!-- <//?php include_once './partials/redes.php'; ?> -->

    <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="page_title">NIVEL SECUNDARIA</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Niveles</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="bienvenidos">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center" style="background-color: var(--color3);">
                <div class="col-lg-6 my-auto" style="background-color: var(--color3);">
                    <!--   <br>
                    <div class="py-5">
                        <div style="text-align:start;">
                            <h2>QUIÉNES SOMOS</h2>
                        </div>
                        <div class="separador"></div>
                    </div> -->
                    <div style="padding:3rem;line-height:2rem;">
                        <p>Este nivel tiene como finalidad ofrecer una educación orientada al desarrollo de competencias de
                            los estudiantes mediante una formación humanista, científica y tecnológica, cuyos conocimientos se encuentran
                            en permanente cambio. Profundiza los aprendizajes logrados en el nivel de Educación Primaria.</p>
                        <p> Este nivel forma para la vida, el trabajo, la convivencia democrática, el ejercicio de la ciudadanía y para acceder a niveles superiores de estudios.
                            Tiene en cuenta las características, necesidades y derechos de los adolescentes y trabaja en permanente coordinación con las familias.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="image-box">
                        <img src="./public/img/web/web/pi-secundaria.png" alt="">
                        <!--  <div style="position:absolute; width:90%; height:88%; border: 2px solid #fff;top:5%;left:5%;"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alianzas">
        <div class="container-fluid" style="padding:4%;">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="py-5">
                        <div style="text-align:center;">
                            <h2>ALIANZAS</h2>
                        </div>
                        <div class="separador mx-auto"></div>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-2 py-5 d-flex justify-content-center">
                        <center><img src="./public/img/web/alianzas/alianza_richmond.png" width="100%" alt=""></center>
                    </div>
                <div class="col-lg-2 py-5 d-flex justify-content-center">
                        <center><img src="./public/img/web/alianzas/alianza_ets.png" width="100%" alt=""></center>
                    </div>
                <div class="col-lg-2 py-5 d-flex justify-content-center">
                        <center><img src="./public/img/web/alianzas/alianza_metgo.png" width="100%" alt=""></center>
                    </div>
                <div class="col-lg-2 py-5 d-flex justify-content-center">
                        <center><img src="./public/img/web/alianzas/alianza_usmp.png" width="100%" alt=""></center>
                    </div>
                <div class="col-lg-2 py-5 d-flex justify-content-center">
                        <center><img src="./public/img/web/alianzas/alianza_usil.png" width="100%" alt=""></center>
                    </div>
            </div>
        </div>
    </section>

    <?php include_once './partials/footer2.php'; ?>


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