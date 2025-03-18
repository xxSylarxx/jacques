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

        #historia {
            font-family: "Raleway", sans-serif;
        }

        #historia p {
            text-align: center;
            font-family: "Raleway", sans-serif;
        }

        .btn {
            color: black;
            background: var(--color2);
            border-radius: 10px;
            font-weight: bold;
            padding: .8rem 2rem;
            font-size: 18px;
            min-width: 200px;
            max-width: 300px;
        }

        .btn:hover {
            background: var(--color1);
            color: white;
        }

        .form-control:focus {
            color: #212529;
            background-color: #fff;
            border-color: #9294bf;
            outline: 0;
            -webkit-box-shadow: 0 0 0 .25rem rgba(255, 181, 47, 0.25);
            box-shadow: 0 0 0 .25rem rgba(255, 181, 47, 0.25);
        }
        /* Eliminar las flechas en navegadores como Chrome, Safari y Edge */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Eliminar las flechas en Firefox */
      /*   input[type="number"] {
            -moz-appearance: textfield;
        } */

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
                        <h2 style="color:var(--color1);">Envíanos tu CV</h2>
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
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="formContacto" name="formcontacto" onsubmit="enviarCorreo(event)">
                        <div class="row">
                            <div class="col-md mb-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md mb-3">
                                <input type="email" class="form-control" name="correo" placeholder="Email" required="">
                            </div>
                            <div class="col-md mb-3">
                                <input type="number" class="form-control" name="celular" placeholder="Celular" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md mb-3">
                                <input type="text" class="form-control" name="cargo" placeholder="Indica a que cargo deseas postular" required="">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="form-label" style="color: #707070;">Añade el archivo de tu CV</label>
                            <input type="file" name="files[]" id="inputFile" multiple="">
                        </div>
                        <br>
                        <div class="row d-flex justify-content-md-start justify-content-center">
                            <div class="col-lg-4">
                                <button class="btn" type="submit">Enviar</button>
                            </div>
                            <div class="col-lg-8 my-auto">
                                <div class="form-check form-check-inline text-white ms-3" data-bs-toggle="modal" data-bs-target="#terminosModal">
                                    <input type="checkbox" class="form-check-input" id="checkone" value="si" required>
                                    <label class="form-check-label" for="checkone">
                                        <a href="./public/files/POLITICA DE PRIVACIDAD BERKELEY SCHOOL.pdf" target="_blank">
                                            <p id="terminos" style="color:bblue;"> "He leído y acepto las políticas de privacidad"</p>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 pt-3 style=" margin-top: 0rem;">
                    <div style="background: #f8eebc; padding: 1rem; border-left: 10px solid var(--color2);">
                        <h4 class="fw-bold" style="color: var(--color1);">También puedes</h4>
                        <div style="color: black;">Enviarnos tu Currículo Vitae no documentado al siguiente email: <b style="color: var(--color1); word-wrap: break-word;"> acolegiocousteau2017@gmail.com </b> </div>
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
    <script>
        function enviarCorreo(e) {
            e.preventDefault();
            const data = new FormData(document.getElementById('formContacto'));
            fetch('./lib/correo_mailer2.php', {
                method: 'POST',
                body: data
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                alert(res);
            }).then(function(res) {
                e.target.reset();
            });
        }
    </script>

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