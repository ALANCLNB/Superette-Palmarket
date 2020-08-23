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
        {{-- PDF reader --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.3.200/pdf_viewer.js"></script>
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Iniciar Sesion</a></li>
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


        {{-- Aqui va la seccion de ofertas en PDF --}}
        <section class="page-section" id="ofertones">
            
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Ofertas de la semana</h2>
                    <h3 class="section-subheading text-muted">Descubre las ofertas de esta semana en Superettes Palmarket.</h3>
                </div>


                {{-- lector PDF ofertas --}}
                <embed class="col-lg-6 col-md-10 col-sm-12    ml-auto mb-auto mr-auto mt-auto" src="{{asset('/principal-archivos/assets/pdf/miku.pdf')}}" id="pdf" />

                
                  

                {{-- <div id="pdf_viewer">
                    <canvas id="pdf_renderer"></canvas>
                </div>

                <div id="navigation-controls">
                    <button id="go_previous">Anterior</button>
                    <input type="number" value="1" id="current_page">
                    <button id="go_next">Siguiente</button>
                </div>

                <div id="zoom-controls">
                    <button id="zoom_in">+</button>
                    <button id="zoom_out">-</button>
                </div> --}}
           

        </section>

       

        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cupones</h2>
                    <h3 class="section-subheading text-muted">Presenta este cupon en caja y recibe tu descuento.</h3>
                

                <div class="row  col-lg-12 col-md-12 col-sm-12    ml-auto mb-auto mr-auto mt-auto" >


                    <div class="col-lg-2 col-md-1 col-sm-0    ml-auto mb-auto mr-auto mt-auto"></div>
                        {{-- Div de cupones --}}
                    <div class="col-lg-8 col-md-10 col-sm-12    ml-auto mb-auto mr-auto mt-auto" id="cupones">
                            <h3 id="codigocupon"> 4DSA4D8D6AS4D8S</h2>
                            <br>
                            <label for="" id="descipcioncupon">20% de descuento en carnes</label>
                    </div>
                        {{-- -------------------------- --}}
                    <div class="col-lg-2 col-md-1 col-sm-0    ml-auto mb-auto mr-auto mt-auto"></div>

                </div>

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
        @include('partials.footerprincipal')







        <!-- departamentos Modals-->
        @include('partials.departamentosmodals')

     






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

        {{-- SCRIPTS PARA EL LECTOR PDF --}}
        {{-- <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
        <script src="js/main.js"></script> --}}


    </body>

    <script>
        var myState = {
            pdf: null,
            current_page:1,
            zoom:1
        }
        pdfjsLib.getDocument("prueba.pdf").then(pdf =>{
            myState.pdf = pdf
            render
        })
        function render(){
            myState.pdf.getPage(myState.current_page.then(page =>{
                var canvas = document.getElementById("pdf_renderer")
                var ctx = canvas.getContext("2d")
                var viewport = page.getViewPort(myState.zoom)

                canvas.width = viewport.width
                canvas.height = viewport.height

                //render page
                page.render({
                    canvasContext:ctx,
                    viewport:viewport
                })
            }))
        }

    </script>

</html>
