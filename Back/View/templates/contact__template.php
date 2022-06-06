<html lang="es">

<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="author" content="Wilkens Mompoint">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
	<style>
	    .text-center{
	        text-align: center;
	    }
        img{
            margin: 0 auto;
        }
        h1{
            margin: 0;
            padding: 0;
        }
        a{  
            color: #000; 
            text-decoration: none; 
            font-size: 18px; 
        }
        a:hover{
            background-color: #0B823A;
        }
	</style>
</head>

<body>
	<div id="container" style="width: 100%;height: auto; margin: 0 auto;">
        
        <center><a href="{SITE_ADDR}"><img src="{EMAIL_LOGO}" width="100" height="100"></a></center>
	    <h1 class="text-center">Sistema de Contacto - Colegio Graneros</h1>
	    <h3 class="text-center">Nuevo Mensaje desde la pagina web</h3>
	    <hr style="width: 80%; border-color: red;">
	    <p style="text-align:center;">Mensaje Enviado por: {FROM_NAME}
            <br/>
            Mensaje:<br/>
            {MESSAGE}
            <br/>
            Numero de telefono: <a href="tel:{PHONE}">{PHONE}</a><br/>
            Correo Electronico: <a href="mailto:{EMAIL}">{EMAIL}</a></br>
	    </p>
	</div>
</body>

</html>