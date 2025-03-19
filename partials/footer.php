<style>
    .topcontrol {
        position: fixed;
        bottom: 30px;
        right: 20px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        /* background: #00D553; */
        /* width: 50px; */
        /* height: 50px; */
        /* padding-top: 6px; */
        /* padding-left: 9px; */
        /* border: 2px solid white; */
        /* border-radius: 50%; */
        transition: all 2 ease-in-out;
    }

    .topcontrol:hover {
        transform: scale(1.06);
    }

    .topcontrol i {
        color: var(--color1);
        font-size: 46px;
    }

    .topcontrol2 {
        position: fixed;
        bottom: 50px;
        right: 18px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background: #00D553;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol2:hover {
        transform: scale(1.08);
    }

    .topcontrol2 i {
        color: white;
        margin-top: 2px;
        margin-left: 2px;
    }

    .topcontrol3 {
        position: fixed;
        bottom: 112px;
        right: 18px;
        opacity: 0.8;
        cursor: pointer;
        z-index: 100;
        background-color: rgb(31, 202, 216, 1);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

   
    .topcontrol3 i {
        position: absolute;
        color: white;
        font-size: 25px;
        top: 20%;
        left: 30%;

        /* margin-top: 2px;
        margin-left: 2px; */
    }

    .topcontrol3:hover {
        transform: scale(1.08);
    }


    /* .topcontrol2 {
        position: fixed;
        bottom: 80px;
        right: 80px; */
    /* opacity: 0.8; */
    /* cursor: pointer;
        z-index: 100;
        width: 180px;
        height: 30px;
        background: #F8F9FA;
        border-radius: 0.25rem;
        border: 1px solid #dee2e6; */
    /* padding-top: 6px; */
    /* padding-left: 9px; */
    /* border-radius: 50%; */
    /*  transition: all 2 ease-in-out;
    } */

    /* .topcontrol2 span {
        text-align: center;
        font-weight: bold;
        color: var(--color1);
        padding: 1rem 2rem;
    } */

    .topcontrol4 {
        position: fixed;
        bottom: 230px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        background-color: #FF0000;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol4 i {
        font-size: 36px;
        color: #fff;
        margin-top: 3px;
        margin-left: -4px;
    }

    .topcontrol4:hover {
        transform: scale(1.08);
    }

    .topcontrol5 {
        position: fixed;
        /* bottom: 112px; */
        bottom: 50px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background: rgb(123, 56, 174); */
        background: linear-gradient(74deg, rgba(123, 56, 174, 1) 0%, rgba(237, 27, 32, 1) 37%, rgba(237, 32, 31, 1) 55%, rgba(236, 12, 35, 1) 67%, rgba(249, 202, 0, 1) 100%);
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol5 i {
        /* height: 28px; */
        /* width: 32px; */
        color: white;
        font-size: 36px;
        margin-top: 4px;
        margin-left: 2px;
    }

    .topcontrol5:hover {
        transform: scale(1.08);
    }

    .topcontrol6 {
        position: fixed;
        bottom: 110px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        /* background-color: #00A884; */
        background-color: #28C44C;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol6 i {
        /* height: 50px; */
        /* width: 50px; */
        font-size: 36px;
        margin-top: 4px;
        margin-left: 1px;
        color: white;
    }

    .topcontrol6:hover {
        transform: scale(1.08);
    }

    .topcontrol7 {
        position: fixed;
        bottom: 170px;
        /* right: 95%; */
        right: 1%;
        /* opacity: 0.8; */
        cursor: pointer;
        z-index: 100;
        background-color: #0B86EE;
        width: 50px;
        height: 50px;
        padding-top: 4px;
        padding-left: 8px;
        /* border: 2px solid white; */
        border-radius: 50%;
        transition: all 3 ease-in-out;
    }

    .topcontrol7 i {
        /* height: 33px; */
        /* width: 33px; */
        font-size: 36px;
        color: #fff;
        margin-top: 5px;
        margin-left: 5px;
    }

    .topcontrol7:hover {
        transform: scale(1.08);
    }

    .botonFormulario {
        background: var(--color2);
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
        transition: .3s all;
    }

    .botonFormulario:hover {
        background: var(--color1);
        transform: scale(1.08);
    }

    footer a {
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-all;
    }
</style>
<footer id="footer" style="position: relative;">
    <a href="#" style="position: absolute; right: 20px; top: 10px; font-size: 36px;">
        <span style="color: var(--color2);"><i class="fas fa-chevron-circle-up" aria-hidden="true"></i></span>
    </a>
    <div class="container-fluid py-4" style="padding-left:3%;padding-right:3%;">
        <div class="row ">
            <div class="col-lg-3 px-4">
                <center><img src="./public/img/icons/escudo22.png" width="80%" alt=""></center>
                <h4 class="py-1 text-center" style="color:var(--color1);">Síguenos en:</h4>
                <div class="d-flex justify-content-center">
                    <div class="col-lg-2">
                        <div style="border-radius:50%;background: var(--color2);width:40px;height:40px;padding-top:4px;">
                            <a href="https://www.facebook.com/p/Colegio-Jacques-Cousteau-La-Molina-100063694535208/" style="color:var(--color1);font-size:20px;" target="_blank">
                                <center><i class="fab fa-facebook"></i></center>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-2 px-5">
                <h4 class="text-start" style="color:var(--color1);">NUESTRO COLEGIO</h4>
                <div class="d-flex justify-content-start py-2"><i class="fas fa-angle-right" style="color:var(--color2);font-size:1.3rem;"></i><a href="./somos.php" style="color:var(--color1);font-family: 'Raleway', sans-serif;" target="_blank">&nbsp;&nbsp;Quiénes Somos</a></div>
                <div class="d-flex justify-content-start py-2"><i class="fas fa-angle-right" style="color:var(--color2);font-size:1.3rem;"></i><a href="./historia.php" style="color:var(--color1);font-family: 'Raleway', sans-serif;" target="_blank">&nbsp;&nbsp;Historia</a></div>
                <div class="d-flex justify-content-start py-2"><i class="fas fa-angle-right" style="color:var(--color2);font-size:1.3rem;"></i><a href="https://richmondlp.com/" style="color:var(--color1);font-family: 'Raleway', sans-serif;" target="_blank">&nbsp;&nbsp;Plataforma Inglés</a></div>
            </div>
            <div class="col-lg-2 py-2 px-5">
                <h4 class="text-start" style="color:var(--color1);">NIVELES</h4>
                <div class="d-flex justify-content-start py-2"><i class="fas fa-angle-right" style="color:var(--color2);font-size:1.3rem;"></i><a href="./primaria.php" style="color:var(--color1);font-family: 'Raleway', sans-serif;">&nbsp;&nbsp;Primaria</a></div>
                <div class="d-flex justify-content-start py-2"><i class="fas fa-angle-right" style="color:var(--color2);font-size:1.3rem;"></i><a href="./secundaria.php" style="color:var(--color1);font-family: 'Raleway', sans-serif;">&nbsp;&nbsp;Secundaria</a></div>

            </div>
            <div class="col-lg-4 py-2 px-5">
                <h4 class="text-start" style="color:var(--color1);">CONTÁCTANOS</h4>
                <div class="d-flex justify-content-start py-1" style="color:var(--color1);font-family: 'Raleway', sans-serif;"><i class="fas fa-location-arrow" style="color:var(--color2);font-size:.8rem;"></i>&nbsp;&nbsp;<p class="text-start" style="margin-top: -5px; margin-bottom:0px;">&nbsp;&nbsp;Avenida Separadora Industrial #3250 <br> La Molina, Lima - Perú</p>
                </div>
                <div class="d-flex justify-content-start py-1" style="color:var(--color1);font-family: 'Raleway', sans-serif;"><i class="fas fa-phone-alt my-auto" style="color:var(--color2);font-size:.8rem;"></i>&nbsp;&nbsp;(51) 948 886 928</div>
                <div class="d-flex justify-content-start py-1"><i class="fas fa-envelope my-auto" style="color:var(--color2);font-size:.8rem;"></i><a href="mailto:acolegiocousteau2017@gmail.com" style="color:var(--color1);font-family: 'Raleway', sans-serif;">&nbsp;&nbsp;acolegiocousteau2017@gmail.com</a></div>
            </div>
        </div>
    </div>



</footer>
<div class="topcontrol2">
    <a href="https://wa.me/+51948886928" target="_blank">
        <span>
            <i class="fab fa-whatsapp fa-2x"></i>
        </span>
    </a>
</div>
<!-- <div class="topcontrol3">
    <a href="ss">
        <span>
            <i class="fas fa-file-signature"></i>
        </span>

    </a>
</div> -->
<!-- <div class="bar-inf2" style="position: fixed; bottom: 60px; right: 20px; z-index: 999;">
    <a href="https://wa.me/+51948886928" target="_blank" class="text-success">
        <span class="py-2 px-3 border bg-light rounded">¿Necesita ayuda?</span> -->
<!-- <img src="./public/img/icons/whatsapp.png" width="60" class="ms-2">
    </a>
</div> -->


<div class="container-fluid" style="background-color: var(--color2);">
    <div class="row ">
        <div class="col-lg-12 my-1 d-flex justify-content-center">
            <span style="text-align:center;color:var(--color1);font-size:15px;">© 2024 Todos los derechos reservados, Berkeley.</span>
        </div>
    </div>
</div>
<section class="container-fluid pb-1" style="background-color:var(--color2);">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-start align-items-center">
                <p class="my-1 text-center" style="font-size: 15px; color:var(--color1)">© 2024 Todos los derechos reservados, Jacques Cousteau.</p>
                <!-- <p class="my-1 text-center politicas" data-bs-toggle="modal" data-bs-target="#politicasFooter"> Conoce nuestras políticas de privacidad </p> -->
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <p class="my-1 text-center" style="font-size: 14px; color: #fff">Desarrollado por <a href="https://catalogoweb.cloud-cubicol.com/" target="_blank" style="color: var(--color1); font-weight: bold;">Sensoft</a></p>
            </div>
        </div>
    </div>
</section>