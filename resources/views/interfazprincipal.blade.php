<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         <!-- Customized Bootstrap Stylesheet -->

    </head>
    <body class="antialiased">

        <div class="sticky-container">
            <ul class="sticky">
                <li>
                    <img src="/img/facebook.png" width="32" height="32">
                    <p><a href="https://web.facebook.com/The-Family-Pets-114222827948723" target="_blank">Pagina<br>Facebook</a></p>
                </li>
                <li>
                    <img src="img/instagram.png" width="32" height="32">
                    <p><a href="https://www.instagram.com/thefamilypetspopayan/" target="_blank">Perfil<br>Instagram</a></p>
                </li>
                <li>
                    <img src="img/whatsapp.png" width="32" height="32">
                    <p><a href="https://plus.google.com/programacionnet" target="_blank">Chat<br>Whatsapp</a></p>
                </li>
            </ul>
        </div>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
            </div>
            <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
        </div>
        <!-- Spinner End -->


        <!-- Brand & Contact Start -->
  <!-- Brand & Contact Start -->
  <div   class="container-fluid py-4 px-5 wow fadeIn"  style="height: 70px">
    <div class="row align-items-center top-bar">
        <div>
            @if (Route::has('login'))
            <div class="hidden sticky-top top-10 right-4  px-5 py-1 sm:block" style="text-align: end" >
                @auth()

                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesi??n</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="" href="{{route('perfil.show')}}">
                        Perfil
                    </a>
                    @else
                <a style="margin: 15px"  target="_blank" href="{{ route('login') }}" >Iniciar sesion</a>

                @if (Route::has('register'))
                    <a target="_blank" href="{{ route('register')}}">Registrase</a>
                @endif


            @endauth
            </div>
        @endif
        </div>

    </div>
</div>

        <div class="sticky-top">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark  py-lg-0 px-lg-2 wow fadeIn" style="height: 90px">
        <div>
            <img src="/img/Logotipo_TPF.ico" class="rounded d-block" alt="">

        </div>
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav  p-20 p-lg-0">

                <a href="#" class="nav-item nav-link active ">Inicio</a>
                <a href="#somos" class="nav-item nav-link">Quienes somos</a>
                <a href="{{ url('/adopcion') }}" class="nav-item nav-link">Adoptar</a>
                <a href="donacion.html" class="nav-item nav-link">Donacion</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Entidades</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0" style="background-color:#009CFF;">
                        <a href="fundaciones.html" class="dropdown-item">Fundaciones</a>
                        <a href="veterinarias.html" class="dropdown-item">Veterinarias</a>

                    </div>
                </div>
                <a href="#contactanos" class="nav-item nav-link">Contactanos</a>
                <a href="{{ url('/ayuda') }}" class="nav-item nav-link">Ayuda</a>
            </div>

        </div>
    </nav>
</div>
    <!-- Navbar End -->

     <!-- Carousel Start -->
     <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="1000">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/perros_gatos.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/callejeros.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/mascota.jpg" alt="Image" style="max-width: 100%; height: 50%;" >
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-0 animated zoomIn">BIENVENIDOS
                            </h1>
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Los animales no son propiedades o cosas, son ornaismos vivientes, sujetos a una vida que merecen nuestra compasion, amor, respeto y apoyo"</h4>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/callejeros.jpg" alt="Image" style="max-width: 100%; height: 50%;  ">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">

                            <h1 class="display-1 text-white mb-0 animated zoomIn">ADOPTA
                            </h1>
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Una mascota esta a la espera de tu llegad, ellos son un angelito que Dios puso en este mundo, que en ves de darle alas le dio una colita.</h4>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

                <div class="container-fluid page-header1 py-5 mb-5 wow fadeIn " data-wow-delay="0.1s">
                    <div class="container text-center py-5">
                        <h1 class="display-4 text-white animated slideInDown mb-3">Quienes somos</h1>
                        <nav aria-label="breadcrumb animated slideInDown">

                        </nav>
                    </div>
    </div>

    <div class="row mb-50 justify-content-center">
        <div class="col-md-5 col-sm-12 text-center offset-md-1">
        <img src="/img/mascota.jpg" class="img-fluid" alt="">
            </div>
        <div class="col-md-5 col-sm-12"> 
            <div class="content">
                <h2> Misi??n </h2>
                <p>The family pets es una pagina web que se creo con el objetivo de brindarle informacion que concientice, y haga una llamado a todas las personas en elcuidado de los animales, ademas brinda la opcion de adoptar mascotas que estan abandonadas
                    y encuentren un hogar amoroso.</p>
            </div>
        </div>
    </div>

    <div class="row mt-50 justify-content-center quienes" style="margin-bottom: 5%">
        <div class="col-12 col-md-5 offset-md-1 col-md-5 col-sm-12">
        <div class="content">
                <h2> Visi??n </h2>
                <p>Para el 2023 esta pagina debera estar disponible a nivel nacional, que permita a las mascotas encontrar un hogar donde encontraran los cuidados y el cari??o que necesitan. De igual manera disminuir la cantidad de animales que estan
                        desprotegidos y que la adopcion se la mejor opcion para las personas.</p>
            </div>
    </div>
    <div class="col-12 col-md-5 col-sm-12 text-center">
        <img src="/img/vision.jpg" class="img-fluid" alt="">
            </div>
    </div>
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" id="contactanos">
            <div class="container text-center py-5">
                <h1 class="display-4 text-white animated slideInDown mb-3">Contactanos</h1>
                <nav aria-label="breadcrumb animated slideInDown">

                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5 " >
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Contactanos</h6>
                    <h1 class="display-6 mb-4">Envianos tu mensaje</h1>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="text-center mb-4">Envianos tu mensaje para conocer tus inquietudes o sugerencias, estamos antentos tu experiencia es lo mas importartante para nosotro para poder seguir mejorando. Gracias por visitar The family pets </p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">NOMBRE COMPLETO</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">CORREO ELECTRONICO</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">TELEFONO</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">ASUNTO</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                        <label for="message">COMENTARIO</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">ENVIAR
                                        MENSAJE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer Start -->

    <!-- Contact End -->


    <!-- Google Map Start -->
    <section>
    <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 440px;" src="https://www.google.com/maps/d/embed?mid=1K-TmOq-NiTr1VPPTeoIG5OGleUg&msa=0&ie=UTF8&t=p&ll=2.3943219999999945%2C-76.57470699999999&spn=7.677974%2C12.08496" frameborder="0" allowfullscreen=""
            aria-hidden="false" tabindex="0"></iframe>
    </div>
  <div class="final" style="margin: 50px;">
    <p>
        2021 ?? Todos los derechos reservados, The family pets .
<a href="https://web.facebook.com/The-Family-Pets-114222827948723">Pol??tica de Protecci??n de Datos</a>
</div>
            </section>
                <!-- Footer End -->


    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


        </div>
    </body>
</html>
