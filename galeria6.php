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
    <link rel="stylesheet" href="./public/css/venobox.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- CARROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CARROUSEL -->

     <title>Colegio Jacques Cousteau</title>
</head>

<body>

    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/venobox.js"></script>
    <script src="./public/js/vue.js"></script>
    <script src="./public/js/jquery.min.js"></script>

    <style>
        .portada {
            position: relative;
        }

        .portada .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            /* left: 10%; */
            padding-left: 10%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 10%;
        }

        .portada .titleContainer .title1 {
            font-size: 60px;
            color: #fff;
            border-left: 8px solid var(--color2);
            padding-left: 10px;
        }

        .portada img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        #content-grid {
            columns: 2;
            column-gap: 6px;
        }

        #content-grid>div.img-links {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
            margin-bottom: 6px;
        }

        #content-grid img {
            height: auto;
            object-fit: cover;
        }

        .breadcrumb a {
            color: var(--color1);
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
    </style>

    <!-- header -->
    <?php include_once './partials/header.php'; ?>

    <br><br><br>
    <section class="container-fluid lista">
        <div class="container">
            <div>
                <ol class="breadcrumb bg-white pl-0">
                    <li class="breadcrumb-item"><a href="./index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="./comunidad.php">Comunidad Custoniana</a></li>
                </ol>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="text-center">
                    <h2 class="fw-bold" style="color:var(--color1);">ESCUELA DE PADRES</h2>
                    <p></p>
                </div>

                <div id="content-grid" class="pt-4">

                    <a class="img-links" data-gall="gallery01" title="ESCUELA DE PADRES" href="./public/img/galeria/escuela1.jpg">
                        <img src="./public/img/galeria/escuela1.jpg" class="mb-2" width="100%">
                    </a>
                    <a class="img-links" data-gall="gallery01" title="ESCUELA DE PADRES" href="./public/img/galeria/escuela2.jpg">
                        <img src="./public/img/galeria/escuela2.jpg" class="mb-2" width="100%">
                    </a>
                    <a class="img-links" data-gall="gallery01" title="ESCUELA DE PADRES" href="./public/img/galeria/escuela3.jpg">
                        <img src="./public/img/galeria/escuela3.jpg" class="mb-2 mb-0" width="100%">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <div class="d-flex justify-content-center">
        <div class="btn1">
            <a href="./comunidad.php">Ver más</a>
        </div>
    </div>
    <br><br><br>


    <!-- footer -->
    <?php include_once './partials/footer.php'; ?>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        addEventListener('DOMContentLoaded', () => {
            const contadores = document.querySelectorAll('.contador_cantidad')
            const velocidad = 10000000000

            const animarContadores = () => {
                for (const contador of contadores) {
                    const actualizar_contador = () => {
                        let cantidad_maxima = +contador.dataset.cantidadTotal,
                            valor_actual = +contador.innerText,
                            incremento = cantidad_maxima / velocidad

                        if (valor_actual < cantidad_maxima) {
                            contador.innerText = Math.ceil(valor_actual + incremento)
                            setTimeout(actualizar_contador, 70)
                        } else {
                            contador.innerText = cantidad_maxima
                        }
                    }
                    actualizar_contador()
                }
            }
            //IntersectionObserver
            const mostrarContadores = elementos => {
                elementos.forEach(elemento => {
                    if (elemento.isIntersecting) {
                        elemento.target.classList.add('animar')
                        elemento.target.classList.remove('ocultar')
                        setTimeout(animarContadores, 600)
                    }
                });
            }
            const observer = new IntersectionObserver(mostrarContadores, {
                threshold: 0.75 //0-1
            })

            const elementosHTML = document.querySelectorAll('.contador')
            elementosHTML.forEach(elementoHTML => {
                observer.observe(elementoHTML)
            })
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            margin: 20,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 1
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 8
                }
            }
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 100,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    // spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    // spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 100,
                },
            },
        });
    </script>
    <script>
        new VenoBox({
            selector: '.img-links',
            numeration: true,
            infinigall: true,
            navSpeed: 300,
        });
    </script>
</body>


</html>