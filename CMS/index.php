<?php
 include "../Back/Controller/ControllerInterno.php";

 $c = new Controller();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Colegio Graneros | CMS</title>
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="icon" href="../img/logo/logo.jpg">
    <link rel="stylesheet" href="../css/cms__styles.css">
    <link rel="stylesheet" href="../css/preloader.css">
</head>
<body>


    <header class="cmsheader d-flex justify-content-between">
      <!--------------------------asd------------------------------->
      <!-------->
       <div class="cmsheader--left">
        <figure class="cmsheader--logo">
            <img src="../img/logo/log.png" alt="" class="cmsheader--img">
            <span>Colegio Graneros</span>
        </figure>
           
        <div class="nav">
            <button class="refresh"><i class="fa-solid fa-refresh"></i></button>
        </div>
       </div>
        <!---------------------------------------------------------->
        <nav class="cmsheader__menu">
            <ul class="cmsheader__menu--items">
                <li class="cmsheader__menu--item"><a href="" class="cmsheader__menu--link"><i class="fa-solid fa-users"></i></a></li>
                <li class="cmsheader__menu--item"><a href="" class="cmsheader__menu--link"><i class="fa-solid fa-comment"></i></a></li>
                <li class="cmsheader__menu--item"><a href="#" class="cmsheader__menu--link cmsheader__menu--link--user"><img class="userperfil__img" src="../img/Docentes/img-1.jpg" alt="">Wilkens <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="cmsheader__submenu">
                        <li class="cmsheader__subitems"><a href="" class="cmsheader__sublink"><i class="fa-solid fa-user"></i>Perfil</a></li>
                        <hr>
                        <li class="cmsheader__subitems"><a href="" class="cmsheader__sublink"><i class="fa-solid fa-check-double"></i>Ajustes</a></li>
                        <li class="cmsheader__subitems"><a href="" class="cmsheader__sublink"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="cmsbody">
       <div class="cmsbodymenu--left">
          <!---------------Detalles Usuario------------------->
          <!----->
           <div class="userdetails">
               <img src="../img/Docentes/img-1.jpg" alt="" class="userimg">
               <p class="userdetails--text">
                   <span class="username">Wilkens Mompoint</span><br>
                   <span class="usercargo">Encargado Informatica</span>
               </p>
               
               <button class="buttonsplit"><i class="fa-solid fa-arrow-right-arrow-left"></i></button>
           </div>
           <!--------------------------ffg------------------------>
           <!------->
           
           <p class="option-title">Inicio</p>
           
           <!------------------Menu Items Left----------------->
           <ul class="menuleft--items">
               <li class="menuleft--item"><a href="#" class="menuleft--link"><i class="fa-solid fa-house"></i> Estadisticas</a></li>
               <li class="menuleft--item"><a href="#" class="menuleft--link menuleft--link--down"><i class="fa-solid fa-folder"></i> Contenido Principal <i class="fa-solid fa-angle-down align-"></i></a>
                  <!---------------Sub-Menu-------------->
                   <ul class="submenuleft--items">
                      
                       <li class="submenuleft--item"><a href="#" class="submenuleft--link"><i class="fa-solid fa-house"></i> Menu Principal</a>
                           <ul class="subsubmenuleft--items">
                                <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#procesoadmision" class="submenuleft--link"><i class="fa-solid fa-user-shield"></i>Proceso de Admision</a></li>
                           
                           </ul>
                       </li>
                       
                          <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#equipo"  class="submenuleft--link"><i class="fa-solid fa-users-rectangle"></i>Equipo</a>
                          
                           <ul class="subsubmenuleft--items">
                              
                               <li class="submenuleft--item"><a href="#"  class="submenuleft--link" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#equipodirectivo"><i class="fa-solid fa-user-shield"></i> Equipo Directivo</a></li>
                               
                               <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#coordinadoracademicos"  class="submenuleft--link"><i class="fa-solid fa-users-line"></i>Coordinadores Academicos</a></li>
                               
                               <li class="submenuleft--item"><a href="#" class="submenuleft--link" type="button" data-bs-toggle="modal" data-bs-target="#ploc" ><i class="fa-solid fa-user-tie"></i>Cuerpo Docente PLOC</a></li>
                               
                               <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#profasignatura"  class="submenuleft--link"><i class="fa-solid fa-user"></i>Profesores de Asignatura</a></li>
                               
                               <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#pie" class="submenuleft--link"><i class="fa-solid fa-user"></i>Equipo de Programa Integracion PIE</a></li>
                               
                           </ul>
                           
                       </li>
                       
                       <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#galeria" class="submenuleft--link"><i class="fa-solid fa-house"></i>Galeria</a></li>
                       
                       <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#documentos" class="submenuleft--link"><i class="fa-solid fa-folder"></i>Documentos</a>
                          
                           <ul class="subsubmenuleft--items">
                               <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#reglamentointerno" class="submenuleft--link"><i class="fa-solid fa-shield"></i>Reglamento Interno</a></li>
                               
                               <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#reglamentoevaluacion" class="submenuleft--link"><i class="fa-solid fa-book"></i>Reglamento de Evaluacion 2022</a></li>
                               <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#reglamentoconvivencia" class="submenuleft--link"><i class="fa-solid fa-user-tie"></i>Reglamento de Convivenvia Escolar</a></li>
                           </ul>
                       </li>
                       <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#escuela" class="submenuleft--link"><i class="fa-solid fa-school"></i>Escuela</a>
                           <ul class="subsubmenuleft--items">
                           <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#utiles" class="submenuleft--link"><i class="fa-solid fa-pen"></i>Utiles</a></li>
                           </ul>
                       </li>
                       <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#plataformas" class="submenuleft--link"><i class="fa-solid fa-folder"></i>Plataformas</a></li>
                       
                       <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#retorno" class="submenuleft--link"><i class="fa-solid fa-folder"></i>Retorno a clases</a>
                           <ul class="subsubmenuleft--items">
                           <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#protocolosanitario" class="submenuleft--link"><i class="fa-solid fa-shield"></i>Protocolo medidas sanitarias 2022</a></li>
                           <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#manualretorno" class="submenuleft--link"><i class="fa-solid fa-shield"></i>Manual Retorno a clases 2022</a></li>
                           <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#parvulo" class="submenuleft--link"><i class="fa-solid fa-user-tie"></i>Párvulo</a></li>
                           <li class="submenuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#basicaymedia" class="submenuleft--link"><i class="fa-solid fa-user-tie"></i>Básica y Media</a></li>
                           </ul>
                       </li>
                   </ul>
               </li>
               <li class="menuleft--item"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#usuario" class="menuleft--link"><i class="fa-solid fa-users"></i> Usuarios</a>
               </li>
           </ul>
           
       </div>
       
       <!-------------------CMS Body Content-------------->
       <div class="cmsbody--content">
        <nav class="cmsbody__menu">
           <div class="cmsbodymenu--position">
               <i class="fa-solid fa-home"></i><span class="position__name">Inicio - Dashboard</span>
           </div>
           
            <ul class="cmsbody__menu--items">
                <li class="cmsbody__menu--item"><a href="" class="cmsbody__menu--link"><i class="fa-solid fa-signal"></i><br>Estadisticas</a></li>
                <li class="cmsbody__menu--item"><a href="#"  class="cmsbody__menu--link" type="button" data-bs-toggle="modal" data-bs-target="#reporte" ><i class="fa-solid fa-file"></i><br>Reporte</a></li>
                <li class="cmsbody__menu--item"><a href="" class="cmsbody__menu--link"><i class="fa-solid fa-calendar"></i><br>Estadisticas</a></li>
            </ul>
           </nav>
       </div>
    </div>
    
    
    
    
    
    
    
    
    
    <!-- Modal Proceso de admision -->
    <div class="modal fade" id="procesoadmision" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Proceso de Admision</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center admision">
                        <label for="">Estado:</label>
                        <span>Cerrado</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-warning">Modificar</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Equipo-->
    <div class="modal fade" id="equipo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-users"></i> Equipo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" id="team-form">
            <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="">Nombre:</label>
                                <input type="text" id="team-name" name="team-name" placeholder="Ingrese su nombre" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Apellido:</label>
                                <input type="text" id="team-lastname" name="team-lastname" placeholder="Ingrese su Apellido" class="form-control">
                            </div>


                            <div class="col-md-6">
                                <label for="">Cargo:</label>
                                <input type="text" id="team-place" name="team-place" placeholder="Ingrese su Cargo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Grupo:</label>
                                <select id="team-group" name="team-group" class="form-control">
                                    <option value="0">Seleccione:</option>
                                    <?php
                                    $lista = $c->listartipoPersonal();
                                    for ($i=0; $i < count($lista); $i++) { 
                                        echo "<option value='".$lista[$i]->getId()."'>".$lista[$i]->getNombre()."</option>";
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="">Correo:</label>
                                <input type="email" id="team-email" name="team-email" placeholder="Ingrese su Correo" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="">Telefono:</label>
                                <input type="number" id="team-phone" name="team-phone" placeholder="Ingrese el numero de telefono" class="form-control">
                            </div>
                            
                            <div class="col-md-12">
                                <label for="">Foto:</label>
                                <input type="file" accept="image/png, image/jpeg, image/jpg" name="team-foto" id="foto" class="form-control">
                            </div>
                            
                            <div class="row justify-content-center">
                                <div class="col-md-4 text-center">
                                    <img style="width: 150px; height: 150px; border-radius: 50%" id="previa" src="https://via.placeholder.com/150" alt=""><br>
                                    <span>Vista Previa</span>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Restablecer</button>
            <button type="submit" class="btn btn-success">Registrar</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    
    <!-- Modal Equipo Directivo-->
    <div class="modal fade" id="equipodirectivo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-user"></i> Equipo Directivo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                       <h4></h4>
                        <table class="table table-dark table-responsive-xl table-striped table-hover equipo">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cargo</th>
                                    <th>Grupo</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >Wilkens</td>
                                    <td >Mompoint</td>
                                    <td >Encargado Informatica</td>
                                    <td >Asistente</td>
                                    <td >informatica2020.cg@gmail.com</td>
                                    <td >945250440</td>
                                    <td ><img style="width: 64px; border-radius: 50%;" src="../img/Docentes/img-1.jpg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    
    <!-- Modal Coordinadores Academicos-->
    <div class="modal fade" id="coordinadoracademicos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-user"></i> Coordinadores Academicos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                       <h4></h4>
                        <table class="table table-dark table-striped table-hover equipo">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cargo</th>
                                    <th>Grupo</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >Wilkens</td>
                                    <td >Mompoint</td>
                                    <td >Encargado Informatica</td>
                                    <td >Asistente</td>
                                    <td >informatica2020.cg@gmail.com</td>
                                    <td >945250440</td>
                                    <td ><img style="width: 64px; border-radius: 50%;" src="../img/Docentes/img-1.jpg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal PLOC -->
    <div class="modal fade" id="ploc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-user"></i> Equipo PLOC</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                       <h4></h4>
                        <table class="table table-dark table-striped table-hover equipo">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cargo</th>
                                    <th>Grupo</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >Wilkens</td>
                                    <td >Mompoint</td>
                                    <td >Encargado Informatica</td>
                                    <td >Asistente</td>
                                    <td >informatica2020.cg@gmail.com</td>
                                    <td >945250440</td>
                                    <td ><img style="width: 64px; border-radius: 50%;" src="../img/Docentes/img-1.jpg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Profesor de Asignatura-->
    <div class="modal fade" id="profasignatura" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-user"></i> Profesor de Asignatura</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                       <h4></h4>
                        <table class="table table-dark table-striped table-hover equipo">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cargo</th>
                                    <th>Grupo</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >Wilkens</td>
                                    <td >Mompoint</td>
                                    <td >Encargado Informatica</td>
                                    <td >Asistente</td>
                                    <td >informatica2020.cg@gmail.com</td>
                                    <td >945250440</td>
                                    <td ><img style="width: 64px; border-radius: 50%;" src="../img/Docentes/img-1.jpg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal PIE-->
    <div class="modal fade" id="pie" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-user"></i> Equipo PIE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                       <h4></h4>
                        <table class="table table-dark table-striped table-hover equipo">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cargo</th>
                                    <th>Grupo</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >Wilkens</td>
                                    <td >Mompoint</td>
                                    <td >Encargado Informatica</td>
                                    <td >Asistente</td>
                                    <td >informatica2020.cg@gmail.com</td>
                                    <td >945250440</td>
                                    <td ><img style="width: 64px; border-radius: 50%;" src="../img/Docentes/img-1.jpg" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Galeria-->
    <div class="modal fade" id="galeria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Galeria</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="galery-form">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <label for="">Tipo de Contenido:</label>
                            <select onchange="cambiar()" name="tipo_content" id="tipo_content" class="form-control">
                                <option value="0">Seleccione</option>
                                <option value="1">Imagen</option>
                                <option value="2">Video</option>
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="img col-md-7">
                            <label for="">Titulo:</label>
                            <input type="text" class="form-control" name="title-img">
                            <label for="">Contenido:</label>
                            <input type="file" name="contenido_img" id="contenido_img" class="form-control">
                            <img src="" alt="" id="galery-preview">
                        </div>
                        <div class="video col-md-7">
                            <label for="">Titulo:</label>
                            <input type="text" class="form-control" name="title-video">
                            <label for="">Contenido:</label>
                            <input type="text" name="contenido_video" placeholder="Ingrese el Link" id="contenido_video" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <button type="submit" class="send btn btn-success btn-lg">Guardar</button>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="modal-footer">
            </div>
        </div>
        </div>
    </div>
    
    
    <!-- Modal Documentos-->
    <div class="modal fade" id="documentos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-folder"></i> Documentos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Reglamento Interno-->
    <div class="modal fade" id="reglamentointerno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-shield"></i>Reglamento Interno</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe src="../media/documentos/Reglamentos/REGLAMENTO-INTERNO-2022.pdf" style="width: 100%; height: 700px;" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Reglamento Evaluacion-->
    <div class="modal fade" id="reglamentoevaluacion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-shield"></i>Reglamento Evaluacion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <iframe src="../media/documentos/Reglamentos/REGLAMENTO-DE-EVALUACION-2022.pdf" style="width: 100%; height: 700px;" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Reglamento Convivenvia-->
    <div class="modal fade" id="reglamentoconvivencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-shield"></i> Reglamento Convivencia</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <iframe src="../media/documentos/Reglamentos/REGLAMENTO-CONVIVENCIA-ESCOLAR-2021.pdf" style="width: 100%; height: 700px;" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Escuela-->
    <div class="modal fade" id="escuela" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-school"></i>Escuela</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Utiles-->
    <div class="modal fade" id="utiles" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-pen"></i>Utiles</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Plataformas-->
    <div class="modal fade" id="plataformas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-shield"></i>Plataformas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    
    <!-- Modal Retorno-->
    <div class="modal fade" id="retorno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Retorno a Clases</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Protocolo Sanitario-->
    <div class="modal fade" id="protocolosanitario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Protocolo Sanitario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    
    <!-- Modal Manual Retorno-->
    <div class="modal fade" id="manualretorno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Manual Retorno</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Parvulo-->
    <div class="modal fade" id="parvulo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Parvulo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Basica Y Media-->
    <div class="modal fade" id="basicaymedia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Basica y Media</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Modal Reporte-->
    <div class="modal fade" id="reporte" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> <i class="fa-solid fa-file"></i> Reporte</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
     <!-- Modal Usuario-->
    <div class="modal fade" id="usuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-user"></i>Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>
    
    
    
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/anime.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/favicons.js"></script>
    <script src="../js/MooTools-Core-1.6.0.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/cmsprocess.js"></script>
    <script src="../js/cms__query.js"></script>
    
</body>
</html>