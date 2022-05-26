<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Wilkens Mompoint">
    <meta name="keywords" content="Fotos Colegio Graneros">
    <meta name="keywords" content="Colegio Graneros - Galeria">
    <title>Colegio Graneros - Galeria</title>
    <link rel="icon" href="../img/logo/log.png">
    <link rel="stylesheet" href="../css/preloader.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/galeria.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/header__styles.css">
</head>
<body>
<!--------------------Preloader---------------------->
 <div class="preloader">
    <img src="../img/logo/log.png" alt="" class="preloader__img">
     <div class="subpreloader">
         
     </div>
     <p class="preloader__text">Procesando........</p>
 </div>
 <!------------------------------------------------------->
  <header class="header">
        <!---------Header Info------------>
        <div class="headerInfo">
            <div class="headerInfo__logo">
                <figure class="headerInfo__picture">
                    <img src="../img/logo/log.png" alt="" class="headerInfo__img">
                </figure>
            </div>
            <div class="headerInfo__content">
                <div class="headerInfo__content__object">
                    <img src="../img/svg_icons/phone.svg" alt="" class="object__img">
                    <p class="object__text">
                        <a href="tel:722471665" class="object__text--link">722471665</a> 
                        <a href="tel:722472581" class="object__text--link">722472581</a><br>
                        <a href="mailto:colegiograneros@gmail.com" class="object__text--link">colegiograneros@gmail.com</a>
                    </p>
                </div>
                
                <div class="headerInfo__content__object">
                    <img src="../img/svg_icons/map.svg" alt="" class="object__img">
                    <p class="object__text">
                        Santa Elena 176<br>
                        Graneros, Chile
                    </p>
                </div>
                
                
                <div class="headerInfo__content__object">
                    <img src="../img/svg_icons/time.svg" alt="" class="object__img">
                    <p class="object__text">
                        08:00 - 17:00<br>
                        Lunes a Viernes
                    </p>
                </div>
                
                
                <div class="headerInfo__content__object">
                    <p>
                    <a href="#" class="object__link">WebMail</a>
                    </p>
                </div>
            </div>
            
        <div class="menu__splot">
            <a class="splot__button" href="#"><img src="../img/svg_icons/menu.svg"></a>
        </div>
        </div>
        <?php
        include '../Headers/header__secondary.php';

        ?>
        
    </header>
    
 <!----------------------Content-------------------------------->
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
                    $ubicacion = $g->getUbicacion();
                    echo "<div class='col-md-6 col-lg-3 d-flex justify-content-center'>";
                    echo "<img onclick='cargar(\"$ubicacion\")' type='button' data-bs-toggle='modal' data-bs-target='#modalimage' src='../media/uploads/galery/$ubicacion' class='galery__img'>";
                    echo "</div>";
                }
                
                ?>          
         </div>
     </div>
     
     <div class="galery__content galery__content--video">
        <div class="galery__images row justify-content-center gap-2">

                <?php
                $galery = $c->listargaleriaVideo();
                for ($i=0; $i < count($galery) ; $i++) {
                    $g = $galery[$i];
                    $ubicacion = $g->getUbicacion();
                    echo '<div class="col-sm-6 col-md-4 col-lg-3 d-flex flex-column justify-content-center align-items-center">';
                    echo "<button onclick='cargarvideo(\"$ubicacion\")' type='button' data-bs-toggle='modal' data-bs-target='#modalvideo' class='videoopen'><i class='fa-solid fa-video'></i></button>";
                    echo '<p class="videoname">'.$g->getNombre().'</p>';
                    echo '</div>';
                }
                ?>
         </div>
     </div>
 </div>
 
    <footer class="footer">
        <p class="footer__text">Copyright &copy Fundación Colegio Graneros - Chile</p>
    </footer>
    
    
    <!-----------------------Modal Image------------------------->
    <div class="modal fade" id="modalimage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="imgmodal" class="imgmodal" src="../img/Docentes/img-1.jpg" alt="">
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
   
   
   <!-----------------------Modal Video------------------------->
    <div class="modal fade" id="modalvideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe id="iframeVideo" class="iframeVideo" src="" title="Video Colegio Graneros" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
   
   
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/MooTools-Core-1.6.0.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/anime.min.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/main__query.js"></script>
    <script src="../js/favicons.js"></script>
    <script src="../js/galery__query.js"></script>
</body>
</html>