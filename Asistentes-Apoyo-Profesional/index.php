<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="application-name" content="Colegio Graneros">
    <meta name="author" content="Wilkens Mompoint">
    <title>Colegio Graneros</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/main__styles.css">
    <link rel="stylesheet" href="../css/header__styles.css">
    <link rel="icon" type="icon" href="../img/logo/log.png">
    <link rel="stylesheet" href="../css/docente.css">
</head>
<body>
  <div>
   <!----------Header------------->
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
                        <a href="mailto:contacto@colegiograneros.cl" class="object__text--link">contacto@colegiograneros.cl</a>
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
                    <a target="_blank" href="https://www.office.com/" class="object__link">WebMail</a>
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
    
   <main>
      <h2 class="content__title">Asistentes de Apoyo Profesional
          <div class="separador"></div>
        </h2>
         
          <div class="container">
            <div class="row">                   
                <?php
                                $lista = $c->listarpersonal(6);
                                for ($i=0; $i < count($lista); $i++) { 
                                    $p = $lista[$i];
                                    echo "<div class='col-md-3 col-sm-6'>";
                                    echo "<div class='our-team d-flex flex-column align-items-center'>";
                                    echo "<div class='pic'>";
                                    echo "<img src='../img/Docentes/".$p->getFoto()."'>";
                                    echo "</div>";
                                    echo "<div class='team-content text-center'>";
                                    echo "<h3 class='title'>".$p->getNombre()." ".$p->getApellido()."</h3>";
                                    echo "<span class='post'>".$p->getCargo()."</span>";
                                    echo "<ul class='social'>";
                                    echo "<li><a href='mailto:".$p->getCorreo()."' class='fa-solid fa-envelope'></a></li>";
                                    echo "</ul>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";

                                }
                            ?>
            </div>
 </div>
    
      
      
   </main>
    </div>
    
    
    <footer class="footer">
        <p class="footer__text">Copyright &copy Fundación Colegio Graneros - Chile</p>
    </footer>
   
       <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/MooTools-Core-1.6.0.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/anime.min.js"></script>
    <script src="../js/main__query.js"></script>
   <script src="../js/favicons.js" crossorigin="anonymous"></script>
    </body>
</html>