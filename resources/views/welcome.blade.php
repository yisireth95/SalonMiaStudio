@extends('layouts.app')

@section('menu')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->

    <div class="banner-video">
        <video muted autoplay loop>
            <source src="img/baner2.mp4" type="video/mp4">
        </video>
        <div class="banner-caption">
            <h1 style="font-size: 3em;">Mia Salon Studio </h1>
            <p>ven y disfrutas una buena experiencia con nuestros mejores estilistas.</p>
            <a href="https://wa.me/1234567890" class="btn btn-primary" style="font-size: 1.2em;">Reserva tu cita</a>
            <!-- Botón que lleva a WhatsApp -->
        </div>
    </div>

    <!-- End Hero Section -->

    <div id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><img src="img/head.png" alt="#" /> Nuestros Servicios</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="hover_chang" class="service_box">
                        <a href="{{ route('Makeup') }}">
                            <i><img src="img/thr.png" alt="#" /></i>
                            <h3>Make Up</h3>
                            <p>some form, by injected humour, or randomised words which don't look even slightly believable.
                                If you are</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="hover_chang" class="service_box">
                        <a href="{{ route('Nails') }}">
                            <i><img src="img/thr1.png" alt="#" /></i>
                            <h3>Nails</h3>
                            <p>some form, by injected humour, or randomised words which don't look even slightly believable.
                                If you are</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="hover_chang" class="service_box">
                        <a href="{{ route('Cabellos') }}">
                            <i><img src="img/thr2.png" alt="#" /></i>
                            <h3>Embellecimiento capilar</h3>
                            <p>some form, by injected humour, or randomised words which don't look even slightly believable.
                                If you are</p>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="read_more" href="javascript:void(0)" onclick="toggleBarberia()">Desplegar para más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 hidden" id="barberia_section">
                        <div id="hover_chang" class="service_box">
                            <a href="{{ route('Barberia') }}">
                                <i><img src="img/thr2.png" alt="#" /></i>
                                <h3>Barbería</h3>
                                <p>some form, by injected humour, or randomised words which don't look even slightly
                                    believable. If you are</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleBarberia() {
            var barberiaSection = document.getElementById('barberia_section');
            barberiaSection.classList.toggle('hidden');
        }
    </script>
    <!-- End Menu Section -->
    <!-- ======= Nosotros ======= -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="titlepage">
                        <h2> <img src="img/head.h.png" alt="#" />Sobre Nostros</h2>
                        <img src="img/nosotros.jpg" alt="#" class="img-right" />
                        <div class="content-wrapper">
                            <div class="text-container">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which don't
                                    look even slightly believable. If you are There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered alteration in some form, by injected
                                    humour, or randomised words which don't look even slightly believable. If you are </p>
                                <a class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- customer -->
    <section id="estilistas">
        <div class="titlepage">
            <h2> <img src="img/head.png" alt="#" />Nuestros Estilistas</h2>


            <div class="estilista" onclick="mostrarDetalle('estilista1')">
                <video src="img/Estilista1.mp4" controls></video>
                <h3>Linda Pinto</h3>
                <p>Especialidad:Manicuristacon más de 8 años de experiencia total capacitada nos brinda un servicios de
                    cuidado de las uñas,
                    como manicuras, pedicuras, aplicación de uñas artificiales y tratamientos. </p>
            </div>
            <div class="estilista" onclick="mostrarDetalle('estilista2')">
                <video src="img/Estilista2.mp4" controls></video>
                <h3>Nombre Estilista 2</h3>
                <p>Especialidad: El exitoso estilista y propietario del salón, se ha hecho un nombre en la industria del
                    cabello a través del trabajo duro,
                    una actitud positiva y la voluntad de enfrentar todo.</p>
            </div>
            <div class="estilista" onclick="mostrarDetalle('estilista3')">
                <video src="img/Estilista3.mp4" controls></video>
                <h3>GLORIA</h3>
                <p>Especialidad: Nuestra estilista Esta esperandolos con las mejores energías para regalonear en estas
                    fechas tan especiales
                    con una experiencia de más de 25 años en el rublo profesional.</p>
            </div>
            <!-- end customer -->
        </div>
    </section>
    <!--  contact --><!-- End About Section -->

    <!-- ======= Gallery Section ======= -->

    <div class="container" data-aos="fade-up">
        <div class="titlepage">
            <div class="section-header">
                <h3> <img src="img/ico-i1.png" alt="#" style="width: 60px; height: 60px;">Mira
                    Nuestras<br>Publicaciones de Instagram</h3>

                <section id="contegallerysy" class="gallery section-bg">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe width="420" height="540" src="https://www.instagram.com/p/C0PywPePcY7/embed/"
                                    frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="420" height="540" src="https://www.instagram.com/p/C0XqBNKOT21/embed/"
                                    frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="420" height="540" src="https://www.instagram.com/p/CvgOw0QuTC3/embed/"
                                    frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="420" height="540"
                                    src="https://www.instagram.com/p/CuFrGv6r8Wn/embed/" frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="420" height="540"
                                    src="https://www.instagram.com/p/Ct-wmSGJyXw/embed/" frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="420" height="540"
                                    src="https://www.instagram.com/p/Ct8HKOktFkZ/embed/" frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="420" height="540"
                                    src="https://www.instagram.com/p/Ct46GZ6rK6z/embed/" frameborder="0"></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe width="420" height="540"
                                    src="https://www.instagram.com/p/CxgGil-uISk/embed/" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

    <!-- ======= Footer ======= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection

</body>

</html>
