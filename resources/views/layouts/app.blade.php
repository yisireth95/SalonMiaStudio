<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="assets/img/logo1.png" rel="icon">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mia Peluqueria</title>

    <!-- Meta description and keywords -->
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Cargar jQuery primero -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">




</head>

<body>
    <!-- end loader -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('welcome') }}">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('welcome') . '#about' }}">Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('welcome') . '#service' }}">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('welcome') . '#estilistas' }}">Estilistas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('welcome') . '#contact' }}">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo2.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <ul class="email">
                            <li><a href="#">llamanos: (+56) 1234567890</a></li>
                            <li><a href="#">Email: Mia@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <main class="py-4">
            @yield('menu')
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    </header>

    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><img src="img/charlar.gif" alt="icono de contactanos" width="200" height="100">
                            contactanos <span class="white"> Mia Salon Studio</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Nombre" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Numero de telefono" type="type"
                                    name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Mensaje" type="type" Message="Name">Message </textarea>
                            </div>
                            <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <button class="send_btn">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27652.640514663188!2d-71.33317982568357!3d-29.96275539999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691c963c9f61ea7%3A0x25b6274e690c814d!2sMIA%20Salon%20Studios%20El%20Santuario!5e0!3m2!1ses-419!2sco!4v1718246055509!5m2!1ses-419!2sco"
                        style="border:0; width: 100%; height: 350px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="footer-section row gy-3">
                <div class="footer-item">
                    <i class="bi bi-clock-fill bi-2x"></i>
                    <span>Horario de atención: Lunes a Viernes, 9am - 6pm</span>
                </div>
            </div>
            <div class="footer-section">
                <div class="footer-item">
                    <i class="bi bi-telephone-fill bi-2x"></i>
                    <span>+123 456 7890</span>
                    <span class="ms-2"><i class="bi bi-whatsapp bi-2x"></i></span>
                    <span>+123 456 7890</span>
                </div>
            </div>
            <div class="footer-section">
                <div class="footer-item">
                    <span>Síguenos en nuestras redes sociales:</span>
                    <span class="ms-2"> <i class="bi bi-facebook bi-2x"></i></span>
                    <span class="ms-2"> <i class="bi bi-instagram bi-2x"></i></span>
                    <span class="ms-2"><i class="bi bi-tiktok bi-2x"></i></span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Tu Compañía. Todos los derechos reservados.</p>
        </div>

        @yield('footer')
    </footer>
    <!-- End Footer -->
    <!--<script src="js/popper.min.js"></script>-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- sidebar -->
   <!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>-->
    <!--<script src="js/custom.js"></script>-->

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
</body>

</html>
