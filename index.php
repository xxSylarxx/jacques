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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Colegio Jacques Cousteau</title>

</head>

<body>

    <style>
        #baner .text-banner {
            padding: 2rem;
            color: var(--color3);
            position: absolute;
            top: 60%;
            left: 15%;

        }
        .img-baner{
            filter: brightness(50%);
        }

        .text-banner span {
            opacity: 0;
        }

        .active span {
            display: inline-block;
            opacity: 0;
            animation: fadeInUp 1s ease-in-out forwards;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #banner-titulo {
            font-size: 2.5rem;
            font-family: 'Raleway', 'sans-serif';
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5), -2px -2px 4px rgba(0, 0, 0, 0.5);
        }

        #banner-detalle {
            font-size: 1.5rem;
            font-family: 'Raleway', 'sans-serif';
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5), -2px -2px 4px rgba(0, 0, 0, 0.5);
        }



        /* Estilo de boton */

        /* CSS */
        .button-51 {
            background-color: var(--color2);
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
            color: var(--color3);
            text-align: justify;
            padding-left: 5rem;
            padding-right: 5rem;
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

        @media (max-width: 1400px) {
            /* #bienvenidos .image-box img {

                height: 630px;
            } */

            #text-marco {
                bottom: 30% !important;
            }
        }

        #alianzas {
            background-color: var(--color3);
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
            background-color: rgba(0, 0, 0, 0.4);
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

        #marco {
            position: absolute;
            width: 80%;
            height: 88%;
            border: 2px solid #fff;
            top: 5%;
            left: 10%;
        }

        #text-marco {
            position: absolute;
            bottom: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #boton-marco {
            position: absolute;
            bottom: 6%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #contenedor-marco {
            position: relative;
        }


        @media screen and (max-width: 750px) {
            #bienvenidos p {

                padding-left: 1rem;
                padding-right: 1rem;
            }

            #boton-marco {

                bottom: .1%;

            }

            #baner .text-banner {
                width: 250px;
                color: var(--color3);
                position: absolute;
                top: 30%;
                left: 15%;

            }

            #banner-titulo {
                font-size: 1rem;
                font-family: 'Raleway', 'sans-serif';
            }

            #banner-detalle {
                font-size: .7rem;
                font-family: 'Raleway', 'sans-serif';
                display: none;
            }

            #bienvenidos .image-box img {
                height: 300px;
            }

        }
    </style>

    <?php include_once './partials/header.php'; ?>


    <section id="baner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/banner/banner1_demo.jpg" class=" img-baner d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">RESPONSABILIDAD</span>
                            <br>
                            <span id="banner-detalle">
                                Impulsamos el compromiso de nuestros estudiantes y colaboradores<br>
                                para asumir con seriedad sus deberes y acciones, promoviendo <br>
                                una actitud proactiva y consciente frente a sus tareas y decisiones.</span>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/banner/banner2_index.png" class=" img-baner d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">EMPATÍA</span>
                            <br>
                            <span id="banner-detalle">
                                Promovemos la capacidad de ponerse en el lugar del otro, entendiendo<br>
                                y respetando sus emociones y necesidades.Fomentamos una comunidad<br>
                                donde la comprensión y el apoyo mutuo son la base de nuestras relaciones interpersonales.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/banner/banner3_demo.jpg" class="img-baner d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">RESPETO</span>
                            <br>
                            <span id="banner-detalle">
                                Valoramos la diversidad de ideas y creencias, promoviendo <br>
                                una convivencia basada en la comprensión y el reconocimiento<br>
                                de los derechos de cada individuo, tanto dentro como fuera del aula.</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/banner/banner4.jpg" class="d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">FORMACIÓN EN VALORES</span>
                            <br>
                            <span id="banner-detalle">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                                Tempora iure maiores eumf ugit molestiae sed nihil distinctio <br>
                                provident,facilis similique.</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="12000">
                    <div style="position:relative;">
                        <img src="./public/img/banner/banner5.jpg" class="d-block w-100" alt="...">
                        <div class="text-banner">
                            <span id="banner-titulo">ACTIVIDADES EXTRACURRICULARES</span>
                            <br>
                            <span id="banner-detalle">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                                Tempora iure maiores eumf ugit molestiae sed nihil distinctio <br>
                                provident,facilis similique.</span>
                        </div>
                    </div>
                </div> -->

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="bienvenidos">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center" style="background-color: var(--color1);">
                <div class="col-lg-6 my-auto" style="background-color: var(--color1);">
                    <br>
                    <div class="py-5">
                        <div style="text-align:start;">
                            <h2>QUIÉNES SOMOS</h2>
                        </div>
                        <div class="separador"></div>
                    </div>

                    <p>La Institución Educativa Privada “Jacques Cousteau” es una entidad sin fines de lucro, promovida por la Sociedad Ecologista Jacques Cousteau, que ofrece servicios educativos a menores en los niveles de Educación Primaria y Secundaria. Nos caracterizamos por brindar una educación integral que combina la excelencia académica con un fuerte compromiso ambiental y social.
                    </p>

                    <a href="./somos.php">
                        <div class="d-flex justify-content-center" style="padding-top:2rem;padding-bottom:2rem;">
                            <button class="button-51" role="button">Ver Más</button>
                        </div>
                    </a>

                </div>
                <div class="col-lg-6 px-0">
                    <div class="image-box">
                        <img src="./public/img/web/web/quienes_somos.png" alt="">
                        <!-- <div style="position:absolute; width:90%; height:88%; border: 2px solid #fff;top:5%;left:5%;"></div> -->
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
                <!-- <div class="col-lg-2 py-5 d-flex justify-content-center"><a href="./alianzas.php">
                        <center><img src="./public/img/web/alianzas/teaching.png" width="80%" alt=""></center>
                    </a></div> -->

            </div>
        </div>
    </section>

    <section id="niveles">
        <div style="padding:2%!important;">

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 py-3">
                        <div class="py-5">
                            <div style="text-align:center;">
                                <h2>NIVELES</h2>
                            </div>
                            <div class="separador mx-auto"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row d-flex justify-content-around">
                    <!-- <div class="col-lg-4 py-3">
                        <div id="contenedor-marco">
                            <center><img src="./public/img/web/p-inicial.jpg" width="90%" alt=""></center>
                            <div id="marco"></div>
                            <div id="text-marco">
                                <h2 style="color:var(--color3);">KINDER</h2>
                            </div>
                            <div id="boton-marco">
                                <a href="./inicial.php" class="boton">Ver Más</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-5 py-3" data-aos="fade-up">
                        <div id="contenedor-marco">
                            <center><img src="./public/img/web/web/p-primaria.png" width="90%" alt=""></center>
                            <div id="marco"></div>
                            <div id="text-marco">
                                <h2 style="color:var(--color3);">PRIMARIA</h2>
                            </div>
                            <div id="boton-marco">
                                <a href="./primaria.php" class="boton">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 py-3" data-aos="fade-up">
                        <div id="contenedor-marco">
                            <center><img src="./public/img/web/web/p-secundaria.png" width="90%" alt=""></center>
                            <div id="marco"></div>
                            <div id="text-marco">
                                <h2 style="color:var(--color3);">SECUNDARIA</h2>
                            </div>
                            <div id="boton-marco">
                                <a href="./secundaria.php" class="boton">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
    </section>
    <section id="comunidad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4" style="background-color: var(--color1);display:flex;justify-content:center;align-items:center;">
                    <div>
                        <!-- <div class="row d-flex justify-content-center pt-5">
                            <div class="py-5">
                                <div style="text-align:center;">
                                    <h2>COMUNIDAD BERKELIANA</h2>
                                </div>
                                <div class="separador2 mx-auto"></div>
                            </div>
                        </div> -->
                        <div class="d-flex justify-content-center">
                            <span style="font-size:3rem;color:var(--color3); font-family: 'Cairo', sans-serif;font-weight:bold;">COMUNIDAD<br>CUSTONIANA</span>
                        </div>
                        <div class="separador2 mx-auto"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/escuela2.jpg" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria6.php" class="boton">ESCUELA DE PADRES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/juramentacion2.jpg" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria5.php" class="boton">AUTORIDADES ESTUDIANTILES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/ciencia5.jpg" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria1.php" class="boton">FERIA DE CIENCIAS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/policia1.jpg" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria2.php" class="boton">VISITA POLICIA NACIONAL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="">

        </section 

    </section>
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