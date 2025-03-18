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
                url('./public/img/web/web/portada-primaria.png');
            background-size: cover;
            background-position: center 15%;
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
        }

        #bienvenidos .image-box img {
            width: 100%;
            height: 580px;
            object-fit: cover;
        }

        @media (max-width: 1400px) {
            #bienvenidos .image-box img {
                height: 500px;
            }
        }

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
                    <h2 class="page_title">NIVEL PRIMARIA</h2>
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
            <div class="row d-flex justify-content-center" style='background-color:var(--color3);'>
                <div class="col-lg-6 my-auto" style="background-color: var(--color3);padding-right:30px;">
                    <!--   <br>
                    <div class="py-5">
                        <div style="text-align:start;">
                            <h2>QUIÉNES SOMOS</h2>
                        </div>
                        <div class="separador"></div>
                    </div> -->
                    <div style="padding:3rem;color:var(--color2);line-height:2rem;">
                        <p>Este nivel tiene como finalidad educar integralmente a los niños. Por ello, promovemos la comunicación en todas las áreas y el manejo operacional del conocimiento,
                            así como el desarrollo espiritual, personal, físico, afectivo, social, vocacional y artístico.</p>
                        <p>
                            También promovemos el pensamiento lógico, la creatividad y la adquisición de habilidades necesarias
                            para el despliegue de potencialidades, así como la comprensión de los hechos cercanos al ambiente natural y
                            social de los estudiantes, en diversas situaciones vinculadas a las prácticas sociales.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="image-box">
                        <img src="./public/img/web/web/pi-primaaria.png" alt="">
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
            </div>
        </div>
    </section>

    <!--  <section id="niveles">
        <div style="padding:2%;">
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
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 py-3">
                    <div style="position:relative;">
                        <center><img src="./public/img/web/p-inicial.jpg" width="90%" alt=""></center>
                        <div style="position:absolute; width:80%; height:88%; border: 2px solid #fff;top:5%;left:10%;"></div>
                        <div style="position:absolute;bottom:20%;left:50%;transform: translate(-50%, -50%);">
                            <h2 style="color:var(--color3);">KINDER</h2>
                        </div>
                        <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="#" class="boton">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div style="position:relative;">
                        <center><img src="./public/img/web/p-primaria.jpg" width="90%" alt=""></center>
                        <div style="position:absolute; width:80%; height:88%; border: 2px solid #fff;top:5%;left:10%;"></div>
                        <div style="position:absolute;bottom:20%;left:50%;transform: translate(-50%, -50%);">
                            <h2 style="color:var(--color3);">ELEMENTARY</h2>
                        </div>
                        <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="#" class="boton">Ver Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div style="position:relative;">
                        <center><img src="./public/img/web/p-secundaria.jpg" width="90%" alt=""></center>
                        <div style="position:absolute; width:80%; height:88%; border: 2px solid #fff;top:5%;left:10%;"></div>
                        <div style="position:absolute;bottom:20%;left:50%;transform: translate(-50%, -50%);">
                            <h2 style="color:var(--color3);">HIGH SCHOOL</h2>
                        </div>
                        <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                            <a href="#" class="boton">Ver Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section> -->
    <!-- <section id="comunidad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4" style="background-color: var(--color1);">
                    <div class="my-auto">
                        <div class="row d-flex justify-content-center pt-5">
                            <div class="py-5">
                                <div style="text-align:center;">
                                    <h2>COMUNIDAD BERKELIANA</h2>
                                </div>
                                <div class="separador2 mx-auto"></div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center" style="padding-top:6rem;padding-bottom:12rem;">

                            <span style="font-size:3rem;color:var(--color3); font-family: 'Cairo', sans-serif;font-weight:bold;">Bilingual<br>Excellence</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/web/danza.jpg" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="#" class="boton">DANZA</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/web/karate2.png" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="#" class="boton">TALLERES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/web/ciencias.jpg" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="#" class="boton">FERIA DE CIENCIAS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/web/show_navidenio.png" alt="">
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="#" class="boton">SHOW FIN DE AÑO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->


    <!--   <section class="container" id="bienvenida">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md">
                <h2>BIENVENIDA</h2>
                <div class="line"></div>
                <br>
                <div class="text-scroll mt-3 mb-4">
                    <h5 class="mt-3 mb-4">Colegio de Psicólogos del Perú. Consejo Directivo Regional I Lima</h5>
                    <p class="text-justify">
                        Hoy en dia tenemos 2 espacios en el que convivimos los seres humanos, uno que es el convencional donde siempre hemos interactuado y otro es, el espacio virtual que nos ofrece la tecnología moderna desde hace algunas décadas. Ya resulta imposible imaginar el prescindir de alguna de ellas.
                    </p>
                    <p class="text-justify">
                        Es el curso cotidiano de nuestra vida en el que nuestra actividad la desarrollamos en espacios físicos y con el contacto directo y, a través del mundo virtual, ahora también desarrollamos nuestras actividades en modo “virtual”. Así tenemos un local físico que funciona a puertas abiertas, en donde estamos dispuestos a recibirlos y a atenderlos.
                        Ahora les presento nuestro espacio virtual renovado que esperamos que sea tan importante como el espacio físico. Con servicios, información y oportunidades lo ponemos a disposición de ustedes, nuestros colegas colegiados.
                    </p>
                    <p class="text-justify">
                        La especial diferencia con los sitios web anteriores, es que este es un portal donde además tendremos un espacio exclusivo de intranet para la interacción en comunidad. Facilitando tramites, posibilitando información y fomentando las oportunidades económicas.
                    </p>
                    <p class="text-justify">
                        Un portal es un espacio de internet e intranet en donde en el primero esta la información externa que todo el publico puede acceder para conocer de nosotros los psicólogos del Perú (Lima) y las oportunidades que ponemos a disposición de ellos. En la segunda área ingresamos a través del logueo (inicio de sesión) para pasar a la intranet en donde encontraremos información personalizada y exclusiva de los psicólogos colegiados y habilitados.
                    </p>
                    <p class="text-justify">
                        Te invitamos a recorrer este nuevo local en la gran nube del internet y descubrir las posibilidades que te ofrecemos y que, contando con tu importante participación e innovación podremos ir mejorándolo cada vez mas.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md d-flex justify-content-center">
                <img src="./public/img/web/bienvenido.jpg" width="100%" alt="">
            </div>
        </div>
    </section>

    <div class="container" id="servicios">
        <div class="row">
            <div class="col">
                <h2 class="title">SERVICIOS AL AFILIADO</h2>
                <div class="line"></div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md my-3">
                <a href="phabilitados.php" class="card shadow rounded p-2 h-100">
                    <div class="crop">
                        <img src="./public/img/web/servicios_conoce-tu-psicologo.jpg" class="w-100 rounded shadow-sm">
                    </div>
                    <div class="card-body text-center py-3">
                        <p class="fw-bold" style="font-size: 20px; color: var(--color2)">PSICOLOGOS HABILITADOS</p>
                        <p>Verifique online si su Psicólogo se encuentra HABILITADO.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md my-3">
                <a href="tramites.php" class="card shadow rounded p-2 h-100">
                    <div class="crop">
                        <img src="./public/img/web/servicios_colegiatura.jpg" class="w-100 rounded shadow-sm">
                    </div>
                    <div class="card-body text-center py-3">
                        <p class="fw-bold" style="font-size: 20px; color: var(--color2)">TRAMITES </p>
                        <p>Si está interesado en conseguir la colegiatura aquí puede ver los requisitos.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md my-3">
                <a href="" class="card shadow rounded p-2 h-100">
                    <div class="crop">
                        <img src="./public/img/web/servicios_consultorios-psicologicos.jpg" class="w-100 rounded shadow-sm">
                    </div>
                    <div class="card-body text-center py-3">
                        <p class="fw-bold" style="font-size: 20px; color: var(--color2)">CONVENIOS</p>
                        <p>Disponemos de diversos espacios para el desarrollo de las psicoterapias y consultas psicológicas.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="noticias" style="margin-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-white title">NOTICIAS</h2>
                    <div class="line" style="background: white;"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="item">
                        <img src="./public/img/galeria/noticia1.jpg" alt="">
                        <h6 class="text-center">01 / 01 / 2023</h6>
                    </div>
                    <br>
                    <a href="">FELIZ AÑO NUEVO</a>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="./public/img/galeria/noticia2.jpg" alt="">
                        <h6 class="text-center">11 / 10 / 2022</h6>
                    </div>
                    <br>
                    <a href="">CAPACITACIONES VIRTUALES</a>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <img src="./public/img/galeria/noticia3.png" alt="">
                        <h6 class="text-center">01 / 09 / 2022</h6>
                    </div>
                    <br>
                    <a href="">CAPACITACIONES VIRTUALES NOVIEMBRE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="eventos" style="margin-top: 5rem;">
        <div class="row" style="margin-bottom: 3rem;">
            <div class="col">
                <h2 class="title">EVENTOS</h2>
                <div class="line"></div>
            </div>
        </div>
        <div class="row item">
            <div class="col-md-3">
                <div class="date">
                    <h3>01</h3>
                    <h6>Septiembre</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <a href="#">CONFERENCIA: ORIENTACIÓN VOCACIONAL Y PROFESIONAL</a>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Rem, non et illo voluptatem voluptatibus nulla aut quam unde
                        pariatur porro atque cumque quas
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="imagen">
                    <img src="./public/img/galeria/evento1.png" alt="evento">
                </div>
            </div>
        </div>
        <div class="row item">
            <div class="col-md-3">
                <div class="date">
                    <h3>02</h3>
                    <h6>Septiembre</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <a href="#">CONFERENCIA: ORIENTACIÓN VOCACIONAL Y PROFESIONAL</a>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Rem, non et illo voluptatem voluptatibus nulla aut quam unde
                        pariatur porro atque cumque quas
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="imagen">
                    <img src="./public/img/galeria/evento1.png" alt="evento">
                </div>
            </div>
        </div>
        <div class="row item">
            <div class="col-md-3">
                <div class="date">
                    <h3>03</h3>
                    <h6>Septiembre</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <a href="#">CONFERENCIA: ORIENTACIÓN VOCACIONAL Y PROFESIONAL</a>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Rem, non et illo voluptatem voluptatibus nulla aut quam unde
                        pariatur porro atque cumque quas
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="imagen">
                    <img src="./public/img/galeria/evento1.png" alt="evento">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="capacitacion" style="margin-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-white title">CENTRO DE CAPACITACIONES</h2>
                    <div class="line" style="background: white;"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 my-4 px-4">
                    <div class="card border-0 shadow h-100">
                        <div class="message">
                            <a href="talleres.php" class="text-white" style="cursor:pointer;">TALLERES &nbsp; <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <img src="./public/img/galeria/TALLER 28 Y 31 DE MARZO.jpg" class="rounded" width="100%">
                    </div>
                </div>
                <div class="col-md-4 my-4 px-4">
                    <div class="card border-0 shadow h-100">
                        <div class="message">
                            <a href="conferencias.php" class="text-white" style="cursor:pointer;">CONFERENCIAS &nbsp; <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <img src="./public/img/galeria/CONFERENCIA 1 DE MARZO.jpg" class="rounded" width="100%">
                    </div>
                </div>
                <div class="col-md-4 my-4 px-4">
                    <div class="card border-0 shadow h-100">
                        <div class="message">
                            <a href="otros.php" class="text-white" style="cursor:pointer;">Otros &nbsp; <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                        <img src="./public/img/galeria/CONFERENCIA 13 DE MARZO.jpg" class="rounded" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
        <div class="row">
            <div class="col">
                <h2 class="title">UBICACIÓN</h2>
                <div class="line"></div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center mt-5">
            <div class="col-lg-7">
                <iframe class="shadow-lg" style="border: 16px solid #fff; border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.563062506913!2d-77.03999048587939!3d-12.073555545685043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c90d9cad36c3%3A0x98d91132b6bf9684!2sColegio%20de%20Psic%C3%B3logos%20del%20Per%C3%BA%20CDR%20I-%20Lima%2C%20SEDE%20LEGAL%20E%20HIST%C3%93RICA!5e0!3m2!1ses-419!2spe!4v1672937562889!5m2!1ses-419!2spe" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4">
                <h5>DIRECCION</h5>
                <div class="d-flex flex-column text">
                    <p class="mb-3"> <i class="fas fa-map-marker-alt me-2"></i> Jr. Camilo Carrillo 164, Jesús María, Lima</p>
                </div>

                <h5 class="mt-4" style="border-top: 2px solid var(--color5); padding-top: 20px;">TELEFONOS</h5>
                <div class="d-flex flex-column text">
                    <p class="mb-3"> <i class="fas fa-phone-alt me-2"></i> Informes: 952 130 045 / (01) 330 5390</p>
                    <p class="mb-3"> <i class="fas fa-phone-alt me-2"></i> Tesorería: 986 776 409 / (01) 330 5389</p>
                </div>

                <h5 class="mt-4" style="border-top: 2px solid var(--color5); padding-top: 20px;">CORREOS</h5>
                <div class="d-flex flex-column text">
                    <a class="mb-3" href="mailto:informes@cpsplima.pe" target="_blank"> <i class="fas fa-envelope me-2"></i> informes@cpsplima.pe</a>
                    <a class="mb-3" href="mailto:tesoreria@cpsplima.pe" target="_blank"> <i class="fas fa-envelope me-2"></i> tesoreria@cpsplima.pe</a>
                    <a class="mb-3" href="mailto:capacitaciones@cpsplima.pe" target="_blank"> <i class="fas fa-envelope me-2"></i> capacitaciones@cpsplima.pe</a>
                </div>
            </div>
        </div>
    </div> -->


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