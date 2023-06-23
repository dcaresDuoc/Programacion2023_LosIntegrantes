<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <script text="text/javascript" src="js/api.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="getDatos()">
    <!-- Start Main Top -->
    
    <div class="main-top" >
        <div class="container-fluid">
            <div class="row" >
                <!-- USO DE API -->
                <!-- (2).- Aqui trae los datos solicitados -->
                <div id="test" style="color: aliceblue; padding-left: 30%;"></div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
					<!-- <div class="login-box" >
						<select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
							<option>Register Here</option>
							<option>Sign In</option>
						</select>
					</div> -->
                    <div class="text-slid-box">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Main Top -->

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
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1  class="m-b-20"><strong>Bienvenido a  <br> "Nuestras Mascotas"</strong></h1>
                            <p class="m-b-40">Haz que tu mascota se vea increíble con nuestra selección de accesorios de alta calidad. Desde collares elegantes hasta juguetes divertidos, tenemos todo lo que necesitas para hacer que tu amigo peludo sea la envidia del vecindario.</p>
                            <p><a class="btn hvr-hover" href="#">Ver más</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>La comida que mascota <br> ama!</strong></h1>
                            <p class="m-b-40">La alimentación es clave para la salud y felicidad de tu mascota. En nuestra tienda de mascotas, encontrarás una amplia variedad de alimentos de alta calidad y sabrosos que ayudarán a tu amigo peludo a mantenerse saludable y lleno de energía.</p>
                            <p><a class="btn hvr-hover" href="#">Ver más</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Manten su salud <br> al máximo</strong></h1>
                            <p class="m-b-40">Descubre nuestra selección de productos de cuidado de la salud para ayudar a mantener a tu mascota en óptimas condiciones, desde suplementos vitamínicos hasta productos para el cuidado dental y más.</p>
                            <p><a class="btn hvr-hover" href="#">Ver más</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.html">Perros</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_02.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.html">Gatos</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_03.jpg" alt="" />
                        <a class="btn hvr-hover" href="shop.html">Exóticos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-01.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-02.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Lo mejor de lo mejor</h1>
                        <p>¡Descubre nuestros productos más populares y satisface las necesidades de tus mascotas con lo mejor del mercado!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Todo</button>
                            <button data-filter=".top-featured">Destacados</button>
                            <button data-filter=".best-seller">Más vendidos</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Vista Previa"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a Favoritos"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Añadir al carro</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Bravery Chicken Adult alimento para perro</h4>
                            <h5> $23.990</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Vista Previa"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a Favoritos"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Añadir al carro</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Bravery Chicken Adult Cat</h4>
                            <h5> $20.990</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Vista Previa"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a Favoritos"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Añadir al carro</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Portland scratch board - 42.5 x 24 x 10 cm rascador</h4>
                            <h5> $8.990</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Vista Previa"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comparar"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Añadir a Favoritos"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Añadir al carro</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Zeedog FlyArnés - Arnés - Gotham - XL, L, M, S, XS</h4>
                            <h5> $25.990</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>¡Productos recién llegados!</h1>
                        <p>¡No te pierdas nuestra selección exclusiva de productos recién llegados para consentir a tu mascota! Encuentra todo lo que necesitas para hacer felices a tus peludos en nuestra tienda. ¡Explora ahora y descubre nuestras últimas novedades!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Portland scratch board</h3>
                                <p>"¡Dale a tu gato la experiencia de rascar de sus sueños con nuestro nuevo rascador recién llegado a la tienda!"</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Bravery Chicken Adult Cat</h3>
                                <p>"¡Haz que tu gato se sienta como un rey con nuestro nuevo alimento premium para gatos, recién llegado a la tienda!"</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Wanpy Beef Jerky 100GR</h3>
                                <p>"¡Los nuevos premios para perros ya están aquí, con sabores irresistibles que harán cada momento aún más especial."</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/mascotas.nuestras2023/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Horario</h3>
							<ul class="list-time">
								<li>Lunes - Viernes: 08:00am a 05:00pm</li> <li>Sabados: 10:00am a 08:00pm</li> <li>Domingo: <span> Cerrado</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Danos tu email para enviarte las ultimas novedades!</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="ejemplo@gmail.com" />
									<i class="fa fa-envelope"></i>
								</div>
								<button style="background-color: #45ada8;" class="btn hvr-hover" type="submit">Enviar</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Nuestras redes sociales</h3>
							<p>Puedes seguirnos en nuestras redes sociales para ver las ultimas tendencias y compartir a tus mascotas!</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Sobre "Nuestras Mascotas"</h4>
                            <p>
                                Somos una empresa en Santiago de Chile que ofrece productos y servicios de alta calidad para mascotas. Brindamos un servicio personalizado y amigable con una amplia selección de productos de las mejores marcas. Nuestro personal experto brinda asesoramiento y recomendaciones personalizadas para satisfacer las necesidades únicas de cada mascota. Apoyamos a organizaciones locales de rescate y adopción.
                            </p> 
							<p>Gracias por elegir nuestra tienda de mascotas. Esperamos poder ayudar a usted y a su mascota pronto.</p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Información</h4>
                            <ul>
                                <li><a href="#">Sobre nosotros</a></li>
                                <li><a href="#">Servicio al cliente</a></li>
                                <li><a href="#">Donde estamos</a></li>
                                <li><a href="#">Terminos &amp; Condiciones</a></li>
                                <li><a href="#">Politicas de privacidad</a></li>
                                <li><a href="#">Info de delivery</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contactanos</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Dirección: Antonio Varas 666  <br>Providencia,<br> Región Metropolitana </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Teléfono: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">nuestrasmascotas@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">Todos los derechos reservados. &copy; 2023 <a href="#">NuestrasMascotas</a>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>