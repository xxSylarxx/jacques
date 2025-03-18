<?php
$pagina = basename($_SERVER['PHP_SELF']);
$active1 = 'nav-link';
$active2 = 'nav-link';
$active3 = 'nav-link';
$active4 = 'nav-link';
$active5 = 'nav-link';
$active6 = 'nav-link';
$active7 = 'nav-link';
switch ($pagina) {
    case 'index.php':
        $active1 .= ' activador';
        break;
    case 'institucion.php':
    case 'historia.php':
    case 'decanos.php':
    case 'mision.php':
    case 'cdr.php':
    case 'ptrabajo.php':
        $active2 .= ' activador';
        break;
    case 'tutoria.php':
    case 'tramites.php':
    case 'convenios.php':
    case 'cagrupaciones.php':
    case 'cuniversitarios.php':
        $active3 .= ' activador';
        break;
    case 'cursos.php':
    case 'talleres.php':
    case 'conferencias.php':
    case 'diplomados.php':
        $active4 .= ' activador';
        break;
    case 'noticias.php':
    case 'eventos.php':
    case 'galeria.php':
    case 'calendarizacion.php':
        $active5 .= ' activador';
        break;
    case 'libreria.php':
        $active6 .= ' activador';
        break;
    case 'articulos_colegas.php':
    case 'videos.php':
    case 'ptv_radio.php':
        $active7 .= ' activador';
        break;
}
?>

<style>
    .escudo {
        display: none;
    }

    .navbar-nav {
        margin-left: auto;
        margin-right: auto;
    }

    .abajo {
        /* background-color: #f4f4f4; */
        /* background: #000; */
        background: var(--color2);
        box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
    }

    /* .abajo .navbar-light .navbar-nav .nav-link {
        color: #fff;
    } */
    .abajo .bar-sup2 {
        display: none;
        transition: .3s;
    }

    .abajo .escudo {
        display: block;
    }

    .abajo .navbar-nav {
        margin-left: auto;
        margin-right: 0;
    }

    header .navbar-nav .nav-item .activador {
        /* color: var(--color4); */
        color: var(--color2);
        font-weight: bold;
    }

    .dropdown-item:hover,
    .dropdown-item:focus {
        background-color: var(--color2);
    }

    #subniveles {
        margin-left: .4rem;
    }

    .dropend .dropdown-toggle::after {
        display: none;
    }

    .dropdown-menu li {
        position: relative;
    }

    .dropdown-menu .submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .dropdown-menu .submenu-left {
        right: 100%;
        left: auto;
    }

    .dropdown-menu>li:hover {
        /* background-color: #f1f1f1; */
        background-color: var(--color1);
    }

    .dropdown-menu>li:hover>.submenu {
        display: block;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
        color: var(--color2);
    }

    @media screen and (max-width: 1000px) {
        #p-bolsa-trabajo {
            display: none;
        }

    }
</style>

<div id="header-top"></div>
<header id="header">

    <!--  <div class="bar-sup">
        <div class="ms-auto">
            <a href="#" class="me-3" target="_blank"><i class="fab fa-facebook"></i><span>Facebook</span></a>
            <a href="#" class="me-3" target="_blank"><i class="fab fa-youtube "></i><span>Youtube</span></a>
            <a href="#" target="_blank" class="me-3"><i class="fas fa-globe-americas"></i><span>Intranet</span></a>
        </div>
    </div> -->

    <div class="bar-sup2" style="position: relative;">


        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <a class="navbar-brand animate__animated animate__zoomIn" href="index.php">
                        <div class="my-auto" style="justify-content:center;display:flex">
                            <img src="./public/img/icons/logo-new.png" id="logo">
                        </div>
                    </a>
                </div>

            </div>

        </div>

        <div id="p-bolsa-trabajo" class="container" style="position: absolute;top:50px;right:0;">
            <div class="row d-flex justify-content-end">
                <div class="col-lg-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5 my-auto p-0">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg my-auto">
                                    <div style="border-radius: 5px;border:solid 1px #262626;width:80%;">
                                        <a href="./trabaja-con-nosotros.php" target="_blank">
                                            <center><span style="color:#262626;text-align:center;">Trabaja con Nosotros</span></center>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-2 p-0">
                            <div class="row d-flex justify-content-start">
                                <div class="col-lg-6"><a href="./ingles/"><img src="./public/img/icons/ingles.jpg" width="100%" alt=""></a></div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="menu1">
        <nav id='header1' class="navbar navbar-expand-lg navbar-light">
            <img src="./public/img/icons/escudo.png" class="escudo" height="100" width="100">
            <button class="navbar-toggler d-lg-none" type="button" style="background-color:var(--color4);" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-color:var(--color4);"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link fw-bold <?= $active1 ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active2 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">NUESTRO COLEGIO</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="./somos.php">Quiénes Somos</a>
                            <a class="dropdown-item" href="./historia.php">Historia</a>
                            <a class="dropdown-item" href="./direccion.php">Dirección General</a>
                            <a class="dropdown-item" href="./coord-academica.php">Coordinación Académica</a>
                            <a class="dropdown-item" href="./coord-conv-tutoria.php">Coordinación de Convivencia y Tutoría</a>
                            <a class="dropdown-item" href="./dpto-psicologia.php">Departamento Psicopedagógico</a>
                            <!-- <a class="dropdown-item" href="ptrabajo.php">Plan de Trabajo</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active3 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">NIVELES</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <!-- <ul class="navbar-nav dropend">
                                <li class="nav-item dropdown">
                                    <a class="nav-link fw-bold  dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                        <span style="color:black;"> &nbsp;NIVELES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-caret-right"></i> <span>
                                    </a>
                                    <ul id="subniveles" class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="submenu" href="inicial.php"> ITEM </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="submenu" href="primaria.php"> ITEM </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="submenu" href="secundaria.php"> ITEM</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                            <a class="dropdown-item" href="./primaria.php">Primaria</a>
                            <a class="dropdown-item" href="./secundaria.php">Secundaria</a>

                            <!-- <a class="dropdown-item" href="cuniversitarios.php">Coordinación con universitarios</a> -->

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold <?= $active4 ?>" href="" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="me-2">POR QUÉ ELEGIRNOS</span><i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="./beneficios.php">Beneficios</a>
                          <!--   <a class="dropdown-item" href="./alianzas.php">Alianzas</a> -->

                            <!-- <a class="dropdown-item" href="ptrabajo.php">Plan de Trabajo</a> -->
                        </div>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link <?= $active6 ?>" href="./admision.php">ADMISIÓN</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link <?= $active6 ?>" href="./comunidad.php">COMUNIDAD CUSTONIANA</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link <?= $active6 ?>" href="./contacto.php">CONTÁCTANOS</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="https://www.colsigloxxi.com/inseducousteau/public/comun/login/logout" target="_blank">INTRANET</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>

<!-- <script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('header-top').style.height = height + "px";

    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");

        header.classList.toggle("abajo", window.scrollY > 200);
    })
</script> -->

<script type="text/javascript">
    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});


    document.addEventListener("DOMContentLoaded", function() {


        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        })




        if (window.innerWidth < 992) {


            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {

                    this.querySelectorAll('.submenu').forEach(function(everysubmenu) {

                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                element.addEventListener('click', function(e) {

                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {

                        e.preventDefault();
                        console.log(nextEl);
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }


    });
</script>