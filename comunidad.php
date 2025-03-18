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

        #historia p {
            text-align: center;
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
            <div class="col-lg-6">
                <div class="pt-5">
                    <div style="text-align:center;">
                        <h2 style="color:var(--color1);">COMUNIDAD CUSTONIANA</h2>
                    </div>
                    <div class="separador mx-auto"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section id="comunidad">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg">
                    <div class="row d-flex justify-content-start">
                        <div class="col-lg-4 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/escuela2.jpg" alt="">
                                <!-- <div style="position:absolute; width:90%; height:88%; border: 2px solid #fff;top:5%;left:5%;"></div> -->
                                <!-- <div style="position:absolute;bottom:20%;left:50%;transform: translate(-50%, -50%);">
                                    <h2 style="color:var(--color3);">SECUNDARIA</h2>
                                </div> -->
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria6.php" class="boton">ESCUELA DE PADRES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/juramentacion2.jpg" alt="">
                                <!-- <div style="position:absolute; width:90%; height:88%; border: 2px solid #fff;top:5%;left:5%;"></div> -->
                                <!-- <div style="position:absolute;bottom:20%;left:50%;transform: translate(-50%, -50%);">
                                    <h2 style="color:var(--color3);">SECUNDARIA</h2>
                                </div> -->
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria5.php" class="boton">AUTORIDADES ESTUDIANTILES
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/ciencia5.jpg" alt="">
                                <!-- <div style="position:absolute; width:90%; height:88%; border: 2px solid #fff;top:5%;left:5%;"></div> -->
                                <!-- <div style="position:absolute;bottom:20%;left:50%;transform: translate(-50%, -50%);">
                                    <h2 style="color:var(--color3);">SECUNDARIA</h2>
                                </div> -->
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria1.php" class="boton">FERIA DE CIENCIAS</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-3 content-img">
                            <div style="position:relative;">
                                <img src="./public/img/galeria/policia1.jpg" alt="">
                                <!-- <div style="position:absolute; width:90%; height:88%; border: 2px solid #fff;top:5%;left:5%;"></div> -->
                                <!-- <div style="position:absolute;bottom:20%;left:50%;transform: translate(-50%, -50%);">
                                    <h2 style="color:var(--color3);">SECUNDARIA</h2>
                                </div> -->
                                <div style="position:absolute;bottom:6%;left:50%;transform: translate(-50%, -50%);">
                                    <a href="./galeria2.php" class="boton">VISITA POLICIA NACIONAL</a>
                                </div>
                            </div>
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