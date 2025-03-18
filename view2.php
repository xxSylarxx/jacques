<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/img/icons/escudo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/web.css">
    <link rel="stylesheet" href="./public/css/niveles.css">
    <link rel="stylesheet" href="./public/css/networks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- script para frame facebook -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v20.0"></script>

    <title>Colegio Jacques Cousteau</title>
</head>

<body>

    <style>
        #portada {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)),
                url('./public/img/web/portada.jpg');
            background-size: cover;
            background-position: center;
            height: 100%;
            padding: 130px 0 180px;
        }

        #portada .page_title {
            font-size: 70px;
            font-weight: bold;
            color: #fff;
        }

        #portada .breadcrumb-item+.breadcrumb-item::before {
            color: white;
        }

        #portada .breadcrumb-item {
            font-size: 26px;
        }

        #portada .breadcrumb-item a {
            color: #fff;
            font-size: 26px;
        }

        #portada .breadcrumb-item:hover a {
            color: var(--color2);
        }

        .lista {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .lista .card {
            transition: transform .3s ease-in-out;
        }

        .lista .card:hover {
            transform: scale(1.06);
        }

        .list-group .list-group-item:hover {
            background: var(--color2);
            /* color: #fff; */
        }

        .text {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 17px;
            line-height: 1.6;
        }


        .btn1 {
            background-color: var(--color1);
            padding: .8rem 1rem;
            font-weight: 600;
            border-radius: 0;
            width: 200px;
            text-align: center;
        }

        .btn1 a {
            color: #FFF;
        }

        .btn1:hover {
            background-color: var(--color2);
            color: var(--color2);
        }

        /* .btn1:hover a {
            color: #000;
        } */
    </style>

    <?php include_once './partials/header2.php'; ?>

    <!-- <div class="container-fluid" id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page_title">Proyección Social</h1>
                    <div class="page_breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item text-white">Entrevistas</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <section class="container lista">
        <div>
            <ol class="breadcrumb bg-white pl-0">
                <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="./coord-academica.php">Coordinación Académica</a></li>
            </ol>
        </div>
        <div class="row justify-content-between mt-4">
            <div class="col">

                <?php include_once './academicos/academico' . $_GET['id'] . '.php' ?>

                <br>

                <div class="d-flex justify-content-center">
                    <div class="btn1">
                        <a href="./coord-academica.php">Ver más</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div id="fb-root"></div>

                <div class="fb-page" data-href="https://www.facebook.com/p/Colegio-Jacques-Cousteau-La-Molina-100063694535208/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/p/Colegio-Jacques-Cousteau-La-Molina-100063694535208/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/p/Colegio-Jacques-Cousteau-La-Molina-100063694535208/">Colegio &quot;Jacques Cousteau&quot; La Molina</a></blockquote>
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