<!doctype html>
<html class="no-js" lang="es">

<head>
    @include('layouts.head')
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header_area">
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== HERO PART START ======-->
    <section id="home" class="hero-area bg_cover">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-9 col-xl-9 col-md-10">
                    <div class="text-center hero-content">
                        <img src="{{ asset('img/LogoPreseeaColorInternet.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== HERO PART END ======-->

    <!--====== SEARCH PART START ======-->
    <div class="search-area">
        <div class="container">
            <div class="search-wrapper">
                <div class="row justify-content-center">
                    <div class="row" id="registro" class="bg-dark text-white">
                    </div>
                    <form id="formulario" class="row align-items-center justify-content-center">
                        @csrf
                        <div class="col-lg-3 col-sm-12 col-10">
                            <div class="search-input">
                                <label for="codigo"></label>
                                <input type="text" class="form-control" name="codigo" id="codigo"
                                    placeholder="Código">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-10">
                            <div class="search-input">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option selected disabled>Elegir</option>
                                    <option value="Cualquiera">Cualquiera</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-10">
                            <div class="search-input">
                                <label for="nivel_educativo">Nivel educativo</label>
                                <select name="nivel_educativo" id="nivel_educativo" class="form-control">
                                    <option selected disabled>Elegir</option>
                                    <option value="PRIMARIO">PRIMARIO</option>
                                    <option value="MEDIO">MEDIO</option>
                                    <option value="SUPERIOR">SUPERIOR</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-10">
                            <div class="search-input">
                                <label for="edad">Grupo edad</label>
                                <select name="edad" id="edad" class="form-control">
                                    <option selected disabled>Elegir</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 ">
                            <div class="search-input">
                                <label for="contenido"></label>
                                <input placeholder="Contenido" type="text" name="contenido" id="contenido">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-5 col-10 ">
                            <a class="btn btn-hover text-center text-white w-100 " style="background: #FF6B6B;"
                                onclick="logKey()">Buscar</a>
                        </div>
                        <div class="row bg-white mt-3" id="resultados">


                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <div class="row mt-5">
        <div class="mx-auto col-sm-12">
            <!--====== FOOTER PART START ======-->
            <footer class="footer-area" id="footer">
                <div class="widget-wrapper">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-sm-12 text-white text-center">
                                <h4 class="text-white">Contactanos</h4>
                                <span>Teléfono:</span>
                                0345983672937
                                <span>Correo:</span>
                                email@gmail.com
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copy-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <p>Diseñado por <a href="http://www.cucsh.udg.mx" rel="nofollow"
                                            target="_blank">CTA CUCSH</a></p>


                                </div>
                            </div>
                        </div>
                    </div>
            </footer>
        </div>
    </div>

    <!--====== FOOTER PART ENDS ======-->
    <!--====== Modal ======-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Registra tu visita</h5>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Antes de buscar debe de llenar primero este formulario</h4>

                    <form class="row justify-content-center" id="form-busqueda" method="POST">
                        @csrf
                        <div class="col-sm-12 col-md-8  mt-2 p-0 border-bottom">
                            <label for="nombre"></label>
                            <input class="p-2 m-0" type="text" name="nombre" id="nombre"
                                placeholder="Nombre(s)*">
                        </div>
                        <div class="col-sm-12 col-md-8  mt-2 p-0 border-bottom">
                            <label for="apellidos"></label>
                            <input class="p-2 m-0" type="text" name="apellidos" id="apellidos"
                                placeholder="Apellidos *">
                        </div>
                        <div class="col-sm-12 col-md-8  mt-2 p-0 border-bottom">
                            <label for="institucion"></label>
                            <input class="p-2 m-0" type="text" name="institucion" id="institucion"
                                placeholder="Institicion">
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-sm-12 col-md-3">
                                <a class="w-100 main-btn btn-hover text-center p-2 fs-6"
                                    onclick="guardar_usuario()">Guardar</a>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <p class="text-muted">NOTA: los campos con (*) son obligatorios</p>
                </div>
            </div>
        </div>
    </div>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>

    <!--====== Tiny slider js ======-->
    <script src="{{ asset('js/tiny-slider.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!--====== glightbox js ======-->
    <script src="{{ asset('js/glightbox.min.js') }}"></script>

    <!--====== Selectr js ======-->
    <script src="{{ asset('js/selectr.min.js') }}"></script>

    <!--====== Nouislider js ======-->
    <script src="{{ asset('js/nouislider.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('js/main.js') }}"></script>


</body>


<script>
    var registrado = 0;

    $(document).ready(function() {
        //$('#staticBackdrop').modal('toggle');
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                method: 'POST',
                data: $('#formulario').serialize(),
                url: "{{ route('buscar-registros') }}" + "?page=" +
                    page,
                success: function(data) {
                    $('#resultados').html(data);
                }
            });
        }
    });

    function logKey() {
        $.ajax({
            url: "{{ route('buscar-registros') }}",
            method: 'POST',
            data: $('#formulario').serialize()
        }).done(function(data) {
            $('#resultados').html(data);
        });
    }

    function guardar_usuario() {
        $.ajax({
            url: "{{ route('registrar-usuario') }}",
            method: 'POST',
            data: $('#form-busqueda').serialize()
        }).done(function(data) {
            $('#registro').html(data);
            $('#staticBackdrop').modal('hide');
            registrado += 1;
        });

    }
</script>

</html>
