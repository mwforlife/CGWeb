<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="application-name" content="Colegio Graneros">
    <meta name="author" content="Wilkens Mompoint">
    <title>Colegio Graneros</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/main__styles.css">
    <link rel="stylesheet" href="css/header__styles.css">
    <link rel="icon" type="icon" href="img/logo/log.png">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/galeria.css">
</head>
<body id="top">
<!--------------------Preloader---------------------->
 <div class="preloader">
    <img src="img/logo/log.png" alt="" class="preloader__img">
     <div class="subpreloader">
         
     </div>
     <p class="preloader__text">Procesando........</p>
 </div>
 <!------------------------------------------------------->
 
 <!--------------------Content Begin---------------------------------->
  <div class="content__principal">
   <!----------Header------------->
    <header class="header">
        <!---------Header Info------------>
        <div class="headerInfo">
            <div class="headerInfo__logo">
                <figure class="headerInfo__picture">
                    <img src="img/logo/log.png" alt="" class="headerInfo__img">
                </figure>
            </div>
            <div class="headerInfo__content">
                <div class="headerInfo__content__object">
                    <img src="img/svg_icons/phone.svg" alt="" class="object__img">
                    <p class="object__text">
                        <a href="tel:722471665" class="object__text--link">722471665</a> /  
                        <a href="tel:722472581" class="object__text--link">722472581</a><br>
                        <a href="mailto:colegiograneros@gmail.com" class="object__text--link">colegiograneros@gmail.com</a>
                    </p>
                </div>
                
                <div class="headerInfo__content__object">
                    <img src="img/svg_icons/map.svg" alt="" class="object__img">
                    <p class="object__text">
                        Santa Elena 176<br>
                        Graneros, Chile
                    </p>
                </div>
                
                
                <div class="headerInfo__content__object">
                    <img src="img/svg_icons/time.svg" alt="" class="object__img">
                    <p class="object__text">
                        08:00 - 17:00<br>
                        Lunes a Viernes
                    </p>
                </div>
                
                
                <div class="headerInfo__content__object">
                    <p>
                    <a target="_blank" href="https://solu25.tuwebdns.net:2096/" class="object__link">WebMail</a>
                    </p>
                </div>
            </div>
            
        <div class="menu__splot">
            <a class="splot__button" onclick="menu()" href="#"><img src="img/svg_icons/menu.svg"></a>
        </div>
        </div>
        
           <?php
           include 'Headers/main__header.php';
           ?>
    
        
    </header>
    
    <main>
       <!--------Slider Begin----------->
        <div class="slider">
            <div class="slider__content">
                   <div class="slider__content--items">      
                    <div class="slider__content--description">
                        <h2 class="slider__title">Dedicado a la excelencia</h2>
                        <p class="slider__text">50 años de tradición, enseñanza y cultura Chilena. Nos aseguramos de que siempre recibas la mejor educación</p>
                    </div>
                    <div class="slider__buttons">
                        <a href="#contact" class="slider__contact">Contactanos</a>
                        <a href="nuestro-colegio/" class="slider__team">Acerca de</a>
                    </div>
               </div>
            </div>
        </div>
        <!---------Slider Finish----------------->
        <!------------------About Begin---------------------->
        <div class="about">
            <div class="about__content">
                <h2 class="about__title">Nuestro Colegio</h2>
                <p class="about__text">El año 2022 nuestro Colegio Graneros cumplió 52 años en la sagrada misión de educar, a la luz de nuestro sello más característico: la Cultura Chilena. Nuestras pertenencias culturales que fluyen en forma natural desde cada uno de nuestros hogares, les dieron origen y sentido. Por esta razón, queremos compartir la alegría inmensa que se nos haya honrado y reconocidos como “Miembros de Honor” del “Consejo Internacional de las Artes y la Música”, bajo la responsabilidad de la UNESCO de las Naciones Unidas, que reúne a 175 países, con sede en la ciudad de Madrid (España). Desde hoy, estamos bajo su protección en mérito a la labor educativa, que nos señala el proyecto educativo institucional, brindándole gran importancia al desarrollo cultural, que a través, de nuestras agrupaciones “Graneros” y “Los Grillitos”.
                </p>
                <a href="nuestro-colegio/" class="about__link">Seguir Leyendo <img href="img/svg_icons/arrow.svg"></a>
            </div>
        </div>
        <!-----------------About Finish------------------------------>
        <div class="container galery">
     <div class="galery__content galery__content--image">
        <div class="row justify-content-center">
         <div class="col-md-10 text-center">
             <h1 class="galery__title">Galeria Colegio graneros</h1>
             <p class="galery__text">La educación es lo que sobrevive cuando lo que se ha aprendido ya se ha olvidado. El cerebro no es un Vaso para llenar, sino una lámpara por encender.</p>
         </div>
        </div>
        <div class="galery__images row justify-content-center gap-2">
            
                <?php
                $galery = $c->listargaleriaImagenes();
                for($i=0;$i<count($galery);$i++){
                    $g = $galery[$i];
                    echo "<div class='col-md-6 col-lg-3 d-flex justify-content-center'>";
                    echo "<img src='media/uploads/galery/".$g->getUbicacion()."' class='galery__img'>";
                    echo "</div>";
                }
                
                ?>
             
         </div>
         
            <div class="row justify-content-center m-xl-3">
                    <div class="col-md-4 d-flex justify-content-center m-lg-3">
                        <a class="object__link" href="Galeria/">Ver más</a>
                    </div>
            </div>
     </div>
     
 </div>
        
        
        
        <!-------------------Admision Begin------------------------->
        <div class="admision ">
            
        <div class="row ">
            <div class="col-md-12 admision-title">
                <h2 class="title-admision text-center">Proceso de Admisión - 
                    <?php
                    $lista = $c->admision();
                    for ($i=0; $i < count($lista); $i++) { 
                       $ad = $lista[$i];
                       if ($ad->getEstado()==1) {
                           echo "Abierto";
                       }else{
                            echo "Cerrado";
                       }
                       break;
                    }      

                    ?></h2>
                    
                    <h2 class="title-admision text-center">Año Académico 2023</h2>
            <div class="periodos container">
                <div class="periodo-postulaciones">
                    <h2>Periodo Postulación</h2>
                    <span class="date"> <span class="day">10</span> Agosto</span></br>
                    <span>Inicio Periodo</span></br>
                    <span class="date"><span class="day">7</span> Septiempre</span></br>
                    <span>Termino Periodo</span></br>
                </div>

                <div class="periodo-resultados">
                    <h2>Periodo Resultados</h2>
                    <span class="date"><span class="day">24</span> Octubre</span></br>
                    <span>Inicio Periodo</span></br>
                    <span class="date"><span class="day">28</span> Octubre</span></br>
                    <span>Termino Periodo</span></br>
                </div>
            </div>
            
            </div>
            <div class="col-md-12">
                <div class="row justify-content-center flex-wrap">
                    <div class="col-md-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="img/svg__illustrations/undraw_schedule_meeting_52nu.svg" alt="" class="illustration">
                            </div>
                            <div class="col-md-6">
                                <h3 class="admicion-title">Mira las Fecha</h3>
                                <p class="admision-text">Accede al Sistema de Admisión Escolar</p>
                                <a target="_blank" href="https://www.sistemadeadmisionescolar.cl/" class="object__link">Ir al SAE</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="img/svg__illustrations/undraw_interaction_design_odgc.svg" alt="" class="illustration">
                            </div>
                            <div class="col-md-6">
                                <h3 class="admicion-title">Postula</h3>
                                <p class="admision-text">Accede al Sistema de Admisión Escolar</p>
                                <a target="_blank" href="https://www.sistemadeadmisionescolar.cl/" class="object__link">Postula en línea</a>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="img/svg__illustrations/undraw_invite_re_rrcp.svg" alt="" class="illustration">
                            </div>
                            <div class="col-md-6">
                                <h3 class="admicion-title">Resultado</h3>
                                <p class="admision-text">El SAE (Sistema de Admisión Escolar) te entregará los resultados vía correo. Acércate a nuestra institución y completa tu matrícula</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        <!--------------------Admision Finish------------------------>
        <!------------------------Contact begin---------------------------------->
        <div id="contact" class="contact w-100" style="background-image: url(img/fondo/contact-fondo.jpg); background-size: cover;
           background-attachment:fixed;">
            <div class="contact__content container" style="padding: 20px;">
                <div class="row justify-content-center gap-4 flex-row-reverse">
                   <h1 class="text-center">Contactanos</h1>
                    <div class="col-md-12 col-lg-4">
                       <form action="" method="post" id="form-contact" name="form-contact">
                            <label for="Nombre Completo">Nombre Completo:</label>
                            <input type="text" placeholder="Ingrese su nombre Completo" class="form-control name" name="name" id="name">
                            <label for="Correo Electronico">Correo Electronico:</label>
                            <input type="email" id="email" name="email" placeholder="Ingrese su correo electronico" class="form-control email">
                            <label for="">Numero de telefono:</label>
                            <input type="number" id="phone" name="phone" placeholder="Ejemplo: 912345678" class="form-control phone">
                            <label for="">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" class="form-control mensaje" id="" cols="30" rows="10"></textarea>
                            <button type="submit" class="btn btn-secondary btn-lg btn-block align-self-end float-end">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-12 col-lg-4 d-flex flex-column justify-content-center">
                       <div class="row">
                           <div class="col-md contact-text">
                                <i class="fa-solid fa-location-arrow"></i>
                                <label for="">Ubicacion</label>
                                <p>
                                    Santa Elena 176, Graneros<br>
                                    VI Regíon, Chile
                                </p>
                               
                           </div>
                       </div>
                       <div class="row">
                           <div class="col contact-text">
                                <i class="fa-solid fa-phone"></i>
                                <label for="">LLamanos</label>
                                <p>
                                    <a href="tel:722471665">722471665</a><br/>
                                    <a href="tel:722471665">722471665</a>
                                </p>
                               
                           </div>
                       </div>
                       <div class="row">
                           <div class="col contact-text">
                                <i class="fa-solid fa-headset"></i>
                                <label for="">Soporte General</label>
                                <p>
                                    <a href="mailto:colegiograneros@gmail.com">colegiograneros@gmail.com</a><br>
                                    <a href="mailto:informatica2020.cg@gmail.com">informatica2020.cg@gmail.com</a>
                                </p>
                               
                           </div>
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    
    <footer class="footer">
        <p class="footer__text">Copyright &copy Fundación Colegio Graneros - Chile</p>
        <a href="login.php"><i class="fa-solid fa-hand-point-right text-white"></i>Acceso</a>

    </footer>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/MooTools-Core-1.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/main__query.js"></script>
    <script src="js/favicons.js"></script>
</body>
</html>