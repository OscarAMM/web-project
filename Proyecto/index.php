<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/index.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">        
        <meta name="description" content="Página web de la cadena más grande de venta de smartphones en el sureste mexicano"/>
        <title>Phonetica - Home Page</title>
    </head>
    <body>
        <header class="container">
            <div>
                <a href="index.php"><img src="img/logo.png" alt="logo" width="300"></a>
            </div>

            <div class="row">
                <div class="col-md-3"> <a href="index.php">Inicio</a> </div>
                <div class="col-md-3"> <a href="#">Servicios</a> </div>
                <div class="col-md-3"> <a href="#">Carrito</a> </div>
                <div class="col-md-3"> <a href="Login.html">LogIn</a> </div>
            </div>
        </header>

        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="my-slider" class="carousel slide" data-ride="carousel">
                        <!-- navegacion por puntos -->
                        <!-- wrapper para las slides -->
                        <!-- next & prev buttons-->
                        <ol class="carousel-indicators">
                            <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#my-slider" data-slide-to="1"></li>
                            <li data-target="#my-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="img/oferta001.png" alt="oferta001"/>
                                <!--<div class="carousel-caption">
                                    <h3>Titulo del Slide 1</h3>
                                </div>-->
                            </div>

                            <div class="item">
                                <img src="img/oferta002.png" alt="oferta002"/>
                                <!--<div class="carousel-caption">
                                    <h3>Titulo del Slide 1</h3>
                                </div>-->
                            </div>

                            <div class="item">
                                <img src="img/oferta003.png" alt="oferta003"/>
                                <!--<div class="carousel-caption">
                                    <h3>Titulo del Slide 1</h3>
                                </div>-->
                            </div>

                            <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <h4 class="text-center"><span class="label label-info">Samsung</span></h4>
                            <img src="img/s8.jpeg" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Galaxy S8+</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>$19,999.99</label></h3>
                                    </div>
                                </div>
                                <p>1TB, 16GB Ram, 4K, 6.1 inches, Android 8.1</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-danger btn-product"><span class="glyphicon glyphicon-heart"></span> Me Gusta</a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a></div>
                                </div>

                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <h4 class="text-center"><span class="label label-info">iPhone</span></h4>
                            <img src="img/iphoneX.jpeg" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>iPhone X</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>$22,999.99</label></h3>
                                    </div>
                                </div>
                                <p>64GB, 1080HD, 6.2 inches, iOS 11</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-danger btn-product"><span class="glyphicon glyphicon-heart"></span> Me Gusta</a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a></div>
                                </div>

                                <p> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <h4 class="text-center"><span class="label label-info">Nokia</span></h4>
                            <img src="img/lumia1020.jpeg" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>Lumia 1020</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>$5000.00</label></h3>
                                    </div>
                                </div>
                                <p>32GB, 2GB Ram, 720HD, 4.5 inches, WP 8.1</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-danger btn-product"><span class="glyphicon glyphicon-heart"></span> Me Gusta</a> 
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar</a></div>
                                </div>

                                <p> </p>
                            </div>
                        </div>
                    </div>

                </div> 

            </div>


            <br>
            <br>

            <section class="wrapper">
                <section class="main">
                    <article>
                        <h2>Seccion 1</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, quisquam! Deserunt veniam ab vero, tenetur atque assumenda? Voluptates facilis neque, aliquam dolores voluptas reprehenderit illo repudiandae necessitatibus sapiente mollitia aut.
                        </p>
                    </article>  

                    <article>
                        <h2>Seccion 2</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, quisquam! Deserunt veniam ab vero, tenetur atque assumenda? Voluptates facilis neque, aliquam dolores voluptas reprehenderit illo repudiandae necessitatibus sapiente mollitia aut.
                        </p>
                    </article>  
                </section>
            </section>

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <p><img src="img/logo.png" alt="" width="400"></p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <ul class="list-unstyled quick-links">
                            <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Acerca de Nosotros</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/ChristianTuyub"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" target="_blank" href="#" ><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                        <br>
                        Copyright © 2018 | <li>Integrantes:</li><li>Tuyub López Christian</li><li>Oski Roski</li><li>Maydali</li>
                    </div>
                    </hr>
                </div>	
            </div>
        </section>
        <!-- ./Footer -->
    </body>
</html>
