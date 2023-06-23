<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Site Metas -->
      <title>Nuestras Mascotas</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
  
      <!-- Site Icons -->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
      <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/styleRegister.css">
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css">

      
      
  </head>
  </head>
  <body>
     <!-- Start Main Top -->
     <header class="main-header">
      <!-- Start Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
      <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Sobre nosotros</a></li>
                        <li class="dropdown">
                            <a href="shop.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Tienda</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html">Catálogo</a></li>
								<li><a href="shop-detail.html">Detalle de producto</a></li>
                                <li><a href="cart.html">Carrito</a></li>
                                <li><a href="checkout.html">Pagar</a></li>
                                <li><a href="my-account.html">Mi cuenta</a></li>
                                <li><a href="wishlist.html">Favoritos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contacto</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="cart.html">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
								<p>Mi Carrito</p>
							</a>
                            <li class="nav-item"><a class="nav-link" href="login.php">Iniciar sesión</a></li><li class="nav-item"></li>
                            <li class="nav-item"><a class="nav-link" href="register.php">Registrarse</a></li><li class="nav-item"></li>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
          <!-- Start Side Menu -->
          <div class="side">
              <a href="#" class="close-side"><i class="fa fa-times"></i></a>
              <li class="cart-box">
                  <ul class="cart-list">
                      <li>
                          <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                          <h6><a href="#">Bravery Chicken Adult alimento para perro </a></h6>
                          <p>1x - <span class="price">$23.990</span></p>
                      </li>
                      <li>
                          <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                          <h6><a href="#">Bravery Chicken Adult Cat alimento para gato</a></h6>
                          <p>1x - <span class="price">$20.990</span></p>
                      </li>
                      <li>
                          <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                          <h6><a href="#">Portland scratch board - 42.5 x 24 x 10 cm rascador</a></h6>
                          <p>1x - <span class="price">$8.990</span></p>
                      </li>
                      <li class="total">
                          <a href="cart.html" class="btn btn-default hvr-hover btn-cart">Ver Carrito</a>
                          <span class="float-right"><strong>Total</strong>: $53.970</span>
                      </li>
                  </ul>
              </li>
          </div>
          <!-- End Side Menu -->
      </nav>
      <!-- End Navigation -->
  </header>
    <div class="center">
      <h1>Registrarse</h1>
      <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        include("./conn.php");
        include("./controller_register.php");
        
        ?>
      <form method="POST" action="">
        <div class="txt_field">
          <input type="text"name="username" required>
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="txt_field">
            <input type="text" name="email" required> 
            <span></span>
            <label>Correo electronico</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Contraseña</label>
          </div>
          <div class="txt_field">
            <input type="password" name="confirmPassword" required>
            <span></span>
            <label>Confirmar Contraseña</label>
          </div>
          <input type="submit" value="Registrar" name="btnenter">
        <div class="signup_link">
          Ya tienes cuenta? <a href="login.php">Iniciar sesion</a>
        </div>
      </form>
    </div>
    <script>// Obtén los elementos del formulario
       
    </script>
  </body>
</html>
