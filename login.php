<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="application-name" content="Colegio Graneros">
        <title>Colegio Graneros | Inicio Sesión</title>
        <link rel="icon" href="img/logo/log.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/login__styles.css">
        <link rel="stylesheet" href="css/preloader.css">
    </head>
    <body class="bg-gradient bg-dark d-flex flex-column justify-content-center" >
        <!--------------------Preloader---------------------->
        <div class="preloader">
            <img src="../img/logo/log.png" alt="" class="preloader__img">
            <div class="subpreloader">
                
            </div>
            <p class="preloader__text">Procesando........</p>
        </div>
        <!------------------------------------------------------->
        
        <div class="login-content text-white text-center ">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <img src="img/logo/log.png" alt="">
                </div>
            </div>
            <form id="login-form" action="">
            <div class="row text-start justify-content-center align-items-center flex-column">
                <div class="col-md-4">
                    <h2 class="text-center" style="font-family: serif;" >Iniciar Sesion</h2>
                    <label for="">Correo:</label>
                    <input type="email" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Contraseña:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="col-md-4 d-flex gap-2">
                    <span>Olvidaste tu Contrasaeña</span><a href="#"><i class="fa-solid fa-hand-point-right text-white"></i></a>
                </div>
                <div class="col-md-4 d-flex justify-content-end gap-3">
                    <button type="reset" class="btn btn-warning btn-lg">Restablecer</button>
                    <button type="submit" class="btn btn-lg btn-success">Ingresar</button>
                </div>
            </div>
            </form>
        </div>
    
    
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/favicons.js"></script>
    <script src="js/login__query.js"></script>
    </body>
</html>