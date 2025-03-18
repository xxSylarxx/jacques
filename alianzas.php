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
                url('./public/img/web/p-alianza.jpg');
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
           /*  padding-top: 5rem; */
            padding-bottom: 5rem;
        }

        #alianzas p {
            
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
        @media screen and (max-width: 700px) {
            .col-lg-8 {
                padding-left: 2rem;
                padding-right: 2rem;
                padding-top: 1.2rem;
            }
        }
    </style>

    <?php include_once './partials/header2.php'; ?>

<!-- <div class="container-fluid" id="portada">
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
    </div>  -->
   
    <!-- <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="pt-5">
                        <div style="text-align:center;">
                            <h2 style="color:var(--color1);">ALIANZAS</h2>
                        </div>
                        <div class="separador mx-auto"></div>
                    </div>
                </div>
            </div> -->
           <br>
           <br>
           <br>
    <section id="alianzas">
        <div class="container py-5" >
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2 my-auto d-flex justify-content-center">
                    <img src="./public/img/web/alianzas/cambridge.png" width="80%">
                </div>
                <div class="col-lg-8">
                    <h3>UNIVERSITY OF CAMBRIDGE</h3>
                    <p>Berkeley School se constituye en un centro preparador para los exámenes internacionales de la Universidad de Cambridge, los estudiantes pueden acceder a dichas evaluaciones mediante la universidad Continental dos veces al año logrando certificarse internacionalmente a temprana edad. </p>
                </div>
            </div>
        </div>
        <div class="container py-5" >
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2 my-auto d-flex justify-content-center">
                <img src="./public/img/web/alianzas/education.png" width="80%">
                </div>
                <div class="col-lg-8">
                    <h3>ABILITIES AND EDUCATION</h3>
                    <p>Por medio de la Alianza con Abilities and Education nuestros estudiantes pueden acceder de manera facultativa a programas de especialización intensiva para la preparación de exámenes internacionales de manera digital. </p>
                </div>
            </div>
        </div>
        <div class="container py-5" >
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2 my-auto d-flex justify-content-center">
                <img src="./public/img/web/alianzas/teaching.png" width="80%">
                </div>
                <div class="col-lg-8">
                    <h3>THE REAL TEACHING</h3>
                    <p>Con esta alianza damos atención a aquellos estudiantes que de manera optativa deseen focalizarse o reforzar ciertos puntos gramaticales o propios del aprendizaje que desean ser profundizados o atendidos según las habilidades o ritmos de aprendizaje de manera personalizada y/o la nivelación en caso lo amerite.</p>
                </div>
            </div>
        </div>
        <div class="container py-5" >
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2 my-auto d-flex justify-content-center">
                <img src="./public/img/web/alianzas/global.png" width="80%">
                </div>
                <div class="col-lg-8">
                    <h3>GLOBAL SCHOOL ALLIANCE </h3>
                    <p>Mediante la mencionada alianza hemos sido reconocidos como colegio internacional de altos estándares académicos a nivel global logrando emparejarnos con un colegio hermano del Reino Unido, dicha experiencia de intercambio virtual y presencial permite que nuestros estudiantes valoren los legados culturales y tengan una experiencia académico-socio-cultural de reconocida importancia respondiendo a la vanguardia de los tiempos. </p>
                </div>
            </div>
        </div>
        <div class="container py-5" >
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2 my-auto d-flex justify-content-center">
                <img src="./public/img/web/alianzas/learning.png" width="80%">
                </div>
                <div class="col-lg-8">
                    <h3>NEW YORK LEARNING SOLUTIONS </h3>
                    <p>Con este Convenio nuestros estudiantes pueden aplicar a evaluaciones 
                        internacionales versión americana en línea con estándares que permiten 
                        insertarse en los procesos de acreditación y evaluación internacional con equivalencia al MCER.</p>
                </div>
            </div>
        </div>
        <div class="container py-5" >
            <div class="row d-flex justify-content-around">
                <div class="col-lg-2 my-auto">
               <img src="./public/img/web/alianzas/admision.png" class="img-fluid">
                </div>
                <div class="col-lg-8">
                    <h3>GLOBAL ADMISSION CENTER </h3>
                    <p>Nuestros estudiantes de los últimos grados del nivel Secundaria pueden acceder a la postulación de diversas universidades del mundo de manera directa sin necesidad de trámites engorrosos, por medio de Global Admission Center nuestros alumnos pueden tener otras expectativas de sus estudios superiores porque el límite lo trazan ellos mismos.</p>
                </div>
            </div>
        </div>
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

</body>



</html>