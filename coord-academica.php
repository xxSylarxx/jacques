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

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Colegio Jacques Cousteau</title>
</head>

<body>

    <style>
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)),
                url('./public/img/web/web/portada-direccion.png');
            background-size: cover;
            background-position: center 40%;
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
            width: 100%;
            height: 100%;
            /* Hace que el contenedor de la imagen ocupe todo el alto disponible */
        }

        #bienvenidos .image-box img {
            width: 100%;
            height: 100%;
            /* La imagen ocupará todo el alto del contenedor */
            object-fit: cover;
            /* Asegura que la imagen cubra todo el espacio sin perder proporción */
            object-position: center;
            /* Centra la imagen en caso de recorte */
        }

        #bienvenidos span {
            font-weight: bold;
        }

        /*  @media (max-width: 1400px) {
            #bienvenidos .image-box img {
                height: 500px;
            }
        } */

        /* -- strcoll -- */
        /* .scroll {
            overflow-y: auto;
            height: 440px;

        }

        .scroll::-webkit-scrollbar {
            background-color: whitesmoke;
            width: 10px;
            border-radius: 6px;
        }

        .scroll::-webkit-scrollbar-thumb {
            background-color: #a7a7a7;
            background-color: #AFADAD;

        }

        .scroll::-webkit-scrollbar-track {
            width: 5px;

        } */

        @media (max-width: 1400px) {
            .scroll {
                overflow-y: auto;
                height: 400px;

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

        .comunicados .card {
            border: 5px solid var(--color1);
        }

        .comunicados .card {
            transition: .3s;
        }

        .comunicados .card .crop {
            overflow: hidden;
        }

        .comunicados .card .crop img {
            transition: all .5s ease-in-out;
            object-fit: cover;
            height: 300px;
            width: 100%;
        }

        .comunicados .card .crop:hover img {
            transform: scale(1.10);
        }

        .comunicados .titulo {
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            display: none;
        }

        .comunicados .texto {
            margin-top: 1rem;
        }

        .comunicados .card .boton {
            color: #fff;
            width: 200px;
            background: var(--color1);
            padding: 10px 30px;
            transition: all .3s ease-in-out;
        }

        .comunicados .card .boton:hover {
            cursor: pointer;
            color: #fff;
            background: var(--color2);
        }

        #publicaciones h2 {
            color: var(--color1);
        }

        #publicaciones .separador {
            background-color: var(--color2);
            height: 4px;
            width: 50px;

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
                    <h2 class="page_title">NOSOTROS</h2>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Coordinación Académica</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="bienvenidos">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center" style='background-color:var(--color3);'>
                <div class="col-lg-6 my-auto " style="background-color: var(--color3);">
                    <div class="scroll">
                        <div class="pt-5">
                            <div style="text-align:start;">
                                <h2>Funciones del Director Académico </h2>
                            </div>
                            <div class="separador"></div>
                        </div>
                        <div style="padding:3rem;color:var(--color2);line-height:2rem;">
                            <ol>
                                <li><span>Orientar, supervisar y evaluar permanentemente la función pedagógica:</span><br>
                                    <p>Garantiza la efectividad y calidad del proceso de enseñanza-aprendizaje, siendo esencial para el éxito académico.</p>
                                </li>
                                <li><span>Organizar eventos de capacitación y actualización docente:</span>
                                    <br>
                                    <p>Asegura que los profesores estén al día con nuevas metodologías y avances, lo que impacta directamente en la calidad educativa.</p>
                                </li>
                                <li><span>Coordinar con la Encargada de Tutoría y Convivencia:</span>
                                    <br>
                                    <p>Atiende las necesidades emocionales y académicas de los estudiantes, promoviendo un ambiente de apoyo integral.
                                    </p>
                                </li>
                                <li><span>Participar en la elaboración de los instrumentos de gestión:</span>
                                    <br>
                                    <p>Como el PEI y el PAT, lo que permite la planificación y seguimiento efectivo de los objetivos educativos institucionales.
                                    </p>
                                </li>
                                <li><span>Orientar y supervisar la correcta aplicación de los sistemas de evaluación: </span>
                                    <br>
                                    <p>Garantiza objetividad y justicia en la evaluación del rendimiento estudiantil, tanto en evaluaciones internas como externas.
                                    </p>
                                </li>
                                <li><span>Proponer el Cuadro de Asignación del Personal y el Cuadro de Distribución de Horas de Clases:</span>
                                    <br>
                                    <p>Es crucial para una distribución eficiente y equilibrada del trabajo docente. </p>
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="image-box">
                        <img src="./public/img/web/web/coord_academico.jpg" alt="">
                        <!-- <div style="position:absolute; width:90%; height:88%; border: 2px solid #fff;top:5%;left:5%;"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="publicaciones">
        <div class="container my-5 comunicados">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="py-5">
                        <div style="text-align:center;">
                            <h2>PUBLICACIONES</h2>
                        </div>
                        <div class="separador mx-auto"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md my-3">
                    <a href="view2.php?id=1" class="card border-0 shadow h-100">
                        <div class="card shadow rounded p-2 h-100">
                            <div class="crop">
                                <img src="./public/img/galeria/aniversario.jpeg">
                            </div>
                            <div class="card-body text-center py-3">
                                <h3 class="text-uppercase h5" style="font-weight: bold;">¡FELIZ 25 ANIVERSARIO! - RICHMOND</h3>
                                <p class="texto"></p>
                                <div class="boton mx-auto">Ver más</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- 
                <div class="row pt-4">
                    <div class="col-lg pt-3">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="/noticias/all/1">1</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </div>
                </div> -->

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
    <script>
        AOS.init();
    </script>

</body>



</html>