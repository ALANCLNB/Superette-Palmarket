<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Superettes Palmarket</title>
        <link rel="icon" type="image/x-icon" href="{{asset('/principal-archivos/assets/img/logos/palmarketlogo2.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('/principal-archivos/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('/principal-archivos/assets/img/logos/palmarketlogo.png')}}" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#departamentos">Departamentos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#falta">Ofertas de la semana</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Cupones</a></li>
                    
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">¡Menos pasos. Más barato!</div>
                <div class="masthead-heading text-uppercase">Superettes Palmarket</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Conocenos</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCION:   DEPARTAMENTOS-->
        <section class="page-section bg-light" id="departamentos">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Departamentos</h2>
                    <h3 class="section-subheading text-muted">Consulta precios y ofertas.</h3>
                </div>
                <div class="row">
                        

                    {{-- DIVICION DE DEPARTAMENTOS--}}
                    {{-- FRUTAS Y VERDURAS --}}
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="departamentos-item">
                            <a class="departamentos-link" data-toggle="modal" href="#departamentosModal1">
                                <div class="departamentos-hover">
                                    <div class="departamentos-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('/principal-archivos/assets/img/departamentos/FRUTERIA.png')}}" alt="" />
                            </a>
                            <div class="departamentos-caption">
                                <div class="departamentos-caption-heading">FRUTAS Y VERDURAS</div>
                                {{-- <div class="departamentos-caption-subheading text-muted">Illustration</div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- CARNICERIA --}}
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="departamentos-item">
                            <a class="departamentos-link" data-toggle="modal" href="#departamentosModal2">
                                <div class="departamentos-hover">
                                    <div class="departamentos-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('/principal-archivos/assets/img/departamentos/CARNICERIA.png')}}" alt="" />
                            </a>
                            <div class="departamentos-caption">
                                <div class="departamentos-caption-heading">CARNICERIA</div>
                                {{-- <div class="departamentos-caption-subheading text-muted">Graphic Design</div> --}}
                            </div>
                        </div>
                    </div>

                    {{-- LACTEOS --}}
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="departamentos-item">
                            <a class="departamentos-link" data-toggle="modal" href="#departamentosModal3">
                                <div class="departamentos-hover">
                                    <div class="departamentos-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('/principal-archivos/assets/img/departamentos/LACTEOS.png')}}" alt="" />
                            </a>
                            <div class="departamentos-caption">
                                <div class="departamentos-caption-heading">LACTEOS</div>
                                {{-- <div class="departamentos-caption-subheading text-muted">Identity</div> --}}
                            </div>
                        </div>
                    </div>

                    {{-- PANADERIS Y TORTILLERIA --}}
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="departamentos-item">
                            <a class="departamentos-link" data-toggle="modal" href="#departamentosModal4">
                                <div class="departamentos-hover">
                                    <div class="departamentos-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('/principal-archivos/assets/img/departamentos/PANADERIA.png')}}" alt="" />
                            </a>
                            <div class="departamentos-caption">
                                <div class="departamentos-caption-heading">PANADERIA Y TORTILLERIA</div>
                                {{-- <div class="departamentos-caption-subheading text-muted">Branding</div> --}}
                            </div>
                        </div>
                    </div>

                    {{-- HIGIENE PERSONAL Y LIMPIEZA --}}
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="departamentos-item">
                            <a class="departamentos-link" data-toggle="modal" href="#departamentosModal5">
                                <div class="departamentos-hover">
                                    <div class="departamentos-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('/principal-archivos/assets/img/departamentos/LIMPIEZA.png')}}" alt="" />
                            </a>
                            <div class="departamentos-caption">
                                <div class="departamentos-caption-heading">HIGIENE PERSONAL Y LIMPIEZA</div>
                                {{-- <div class="departamentos-caption-subheading text-muted">Website Design</div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- ABARROTES --}}
                    <div class="col-lg-4 col-sm-6">
                        <div class="departamentos-item">
                            <a class="departamentos-link" data-toggle="modal" href="#departamentosModal6">
                                <div class="departamentos-hover">
                                    <div class="departamentos-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('/principal-archivos/assets/img/departamentos/ABARROTES.png')}}" alt="" />
                            </a>
                            <div class="departamentos-caption">
                                <div class="departamentos-caption-heading">ABARROTES Y DEMÁS</div>
                                
                                {{-- <div class="departamentos-caption-subheading text-muted">ABARROTES</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section" id="cupones">


        </section>

        <!-- About-->
        {{-- <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('/principal-archivos/assets/img/about/1.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('/principal-archivos/assets/img/about/2.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('/principal-archivos/assets/img/about/3.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('/principal-archivos/assets/img/about/4.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section> --}}
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('/principal-archivos/assets/img/team/1.jpg')}}" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('/principal-archivos/assets/img/team/2.jpg')}}" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{asset('/principal-archivos/assets/img/team/3.jpg')}}" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Marcas o proveedores-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/logos/cocalogo.png')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/logos/lalalogo.png')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/logos/sigmalogo.png')}}" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/logos/costenalogo.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Quejas y sugerencias</h2>
                    <h3 class="section-subheading text-muted">Aportanos tu opinion para seguir mejorando y brindarte el mejor servicio.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Politicas de privacidad</a>
                        <a href="#!">Terminos de uso</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- departamentos Modals-->
        <!-- Modal 1-->
        <div class="departamentos-modal modal fade" id="departamentosModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{asset('/principal-archivos/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center" style="margin-top: 5rem;">
                            <div class="col-lg-8">
                                <div class="modal-body">


                                    <!-- Lista de productos-->
                                    <div class="productodepartamento">
                                    <h2 class="text-uppercase" style="margin-top: 2.5rem;">Frutas y verduras</h2>
                                    {{-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> --}}
                                    <form class="form-inline my-2 my-lg-0    col-lg-12 col-md-12 col-sm-12">
                                        <div class="col-lg-2 col-md-2 col-sm-1"></div>

                                            <input class="form-control mr-sm-2   col-lg-6 col-md-6 col-sm-4"  type="search" placeholder="Busca aquí productos, marcas, etc.." aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0 col-lg-2 col-md-2 col-sm-2"  type="submit">Buscar</button>
                                        
                                        <div class="col-lg-2 col-md-2 col-sm-1"></div> 
                                    </form>

                                </div>
                                
                                
                                <div class="container d-block" style="margin-top: 3rem;">

                                    <div class="row no-gutters">

                                        @for($i=0; $i<6; $i++)
                                            <div class="col-lg-3 col-md-4 col-sm-6 fondo con ml-auto mb-auto mr-auto mt-auto" style="margin-bottom: 0.5rem;">
                                                <img src="{{asset('/principal-archivos/assets/img/bg-header.png')}}" class="img-fluid" style="width: 95%; height: 95%; float: left;">

                                                <ul class="list-inline">
                                                    <li>Nombre</li>
                                                    <li>Marca</li>
                                                    <li>Precio</li>
                                                </ul>
                                                    {{-- <div class="texto1 mb-3">hola</div>
                                                <div class="texto2 mt-5">Creado por:</div> --}}
                                            </div>
                                                
                                            @endfor


                                            

                                        
                                           
                                        
                                    </div>
                                </div>

                                            {{-- <div class="productoscontenedor" style="width: 25%;">
                                                <img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/bg-header.png')}}" alt="" />
                                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos 
                                                    deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                                <ul class="list-inline">
                                                    <li>Nombre</li>
                                                    <li>Marca</li>
                                                    <li>Precio</li>
                                                </ul>
                                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                    <i class="fas fa-times mr-1"></i>
                                                    Close Project
                                                </button>
                                            </div> --}}

                            </div>
                                        {{-- Divs de productos --}}
                                        
                            
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="departamentos-modal modal fade" id="departamentosModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{asset('/principal-archivos/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/departamentos/02-full.jpg')}}" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="departamentos-modal modal fade" id="departamentosModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{asset('/principal-archivos/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/departamentos/03-full.jpg')}}" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="departamentos-modal modal fade" id="departamentosModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{asset('/principal-archivos/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/departamentos/04-full.jpg')}}" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="departamentos-modal modal fade" id="departamentosModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{asset('/principal-archivos/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/departamentos/05-full.jpg')}}" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="departamentos-modal modal fade" id="departamentosModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{asset('/principal-archivos/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('/principal-archivos/assets/img/departamentos/06-full.jpg')}}" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{asset('/principal-archivos/assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('/principal-archivos/assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('/principal-archivos/js/scripts.js')}}"></script>
    </body>
</html>
