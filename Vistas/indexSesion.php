<?php
//seguridad de sesion
session_start();
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Phone Center</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="Shortcut Icon" type="image/x-icon" href="../assets/icons/shortcut-icon.ico" />
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    </head>
<body>
    <div class="page-container">
        <nav class="navegacion">
            <div class="logo tittles-pages">
                 Phone Center
            </div>
			<ul class="menu">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="product.html">Catalogo</a></li>
                <li><a><?php echo $_SESSION['usuario'];?></a>
					<ul class="submenu">
						<li><a href="perfil.php">Ver Perfil</a></li>
						<li><a href="../Controlador/cerrarsesion.php">Cerrar Sesion</a></li>
					</ul>
				</li>
				<li><a href="MostrarCarrito.php">carrito<img src="../assets/img/carro.png"></a></li>
			</ul>
		</nav>
        <div class="content-page cover-background font-content-index">
            <div class="jumbotron">
              <h1 class="tittles-pages">Bienvenido a Phone Center</h1>
              <p class="tittles-pages"> “Captura los mejores momentos y compártelos con la familia”</p>
            </div>
            <section class="OS-phones section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="tittles-pages">Sistemas en nuestros celulares y smartphones</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><i class="fa fa-apple"></i></p>
                                <h3 class="text-center">iOS</h3>
                                <!-- <p class="text-justify">iPhone es una línea de teléfonos inteligentes de alta gama diseñada por Apple Inc. Ejecuta el sistema operativo móvil iOS, nuestros equipos de esta línea ofrecen seguridad y confianza por parte de la empresa Apple, los usuarios resaltan el gran desempeño que les dan a los diseños de los equipos celulares, volviéndose muy famosos por los jóvenes.
                                </p> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><i class="fa fa-windows"></i></p>
                                <h3 class="text-center">Windows Phone</h3>
                                <!-- <p class="text-justify">Microsoft Mobile fue una filial de Microsoft, dedicada al diseño y fabricación de teléfonos móviles. Esta empresa tiene su origen en la compra por parte de Microsoft de la división de Dispositivos y Servicios de Nokia, completada el 25 de abril de 2014 Microsoft Mobile Fue la filial de Microsoft encargada del desarrollo de la serie Microsoft Lumia, la línea de teléfonos inteligentes que ejecutan el sistema operativo Windows Phone y Windows 10 Mobile.                                    
                                </p> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><i class="fa fa-android"></i></p>
                                <h3 class="text-center">Android</h3>
                                <!-- <p class="text-justify">El sistema operativo Android ofrece a los equipos inteligentes seguridad, garantía y una manera fácil de navegar por sus modelos los equipos que tienen este sistema operativo, está dirigido al público en general, pero el público más representativo es la juventud que elogia a nuestros equipos con este sistema operativo como uno de los más rendidores y completos, frente a sus competidores.
                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news-promo-content section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="tittles-pages">¿Quienes somos?</p>
                            <br>
                        </div>
                        <div class="content-dest">
                            <center><p>Somos una empresa emprendedora dedicada a la venta de equipos celulares de todo tipo de gama con la finalidad innovar en la modalidad de ventas a domicilio, buscamos expandir nuestro mercado a más productos tecnológicos.  
                             </p></center>
                        </div>
                    
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <h3 class="tittles-pages">Nuestra Misión</h3><br>
                                <p>Nuestra misión es ofrecer el mejor servicio de distribución de celulares de alta gama a buen precio y en el mejoy tiempo de entrega. 
                                </p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <h3 class="tittles-pages">Nuestra Visión</h3><br>
                                <p>Ser los primeros en la adquisición y distribución de equipos celulares a nivel nacional.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section> 
        </div>
    	<footer class="footer">
    		<div class="container-fluid">

                <div class="col-xs-12 col-sm-6 text-center">
                    <div class="content-dest">
                        <br>
                        <h4>Phone Center &copy; 2022</h4>
                        <p>Empresa vinculada con los servicios de venta de dispositivos móviles con tecnología 
                            de punta, además del mejor servicio de reparación para nuestros clientes, tu felicidad es
                            nuestra prioridad. </p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 text-center">
                    <div class="content-dest">
                        <p>Direccion: Lorem ipsum dolor sit amet, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        consectetur adipisicing elit.</p>
                        <p>llamenos: +51 969 754 397&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </p>
                        <ul class="list-unstyled list-social-icons">
                            <p>Siguenos en</p>
                            <li >
                                <a href="#!">
                                   <i class="fa fa-facebook" style="background-color: #3B5998;"></i> 
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fa fa-google-plus" style="background-color: #DD4B39;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fa fa-twitter"  style="background-color: #56A3D9;"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="fa fa-youtube" style="background-color: #BF221F;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
    		</div>
    	</footer>
    </div>

</body>
</html>
